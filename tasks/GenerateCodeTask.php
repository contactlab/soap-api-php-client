<?php

namespace ContactLab\Api\Client\Phing;

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;
use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Generator;
use Symfony\CS\Fixer;
use Symfony\CS\Config\Config as CSConfig;
use Symfony\CS\FixerInterface;
use League\Url\Url;

/**
 * This Phing task regenerates the PHP classes mapping the WSDL document describing the ContactLab SOAP API service
 */
class GenerateCodeTask extends \Task
{
    /**
     * The URL of the service.
     */
    const WSDL_URL            = 'https://soap.contactlab.it/soap/services?wsdl';

    public function init()
    {
        // check if dependencies are installed
        if (!file_exists($this->project->getBasedir() . '/vendor/autoload.php')) {
            throw new \BuildException(
                "Dependencies not installed; run 'composer install --dev' before launching this task"
            );
        }
    }

    public function main()
    {
        try {

            /*
             * PROPERTIES VALIDATION
             */

            // check if the proxy flag has been set
            $proxy = $this->getProject()->getUserProperty('proxy');
            $proxy = $proxy !== null ? filter_var($proxy, FILTER_VALIDATE_BOOLEAN) : true;

            // determine the url of the WSDL document
            $wsdlUrl = $this->getProject()->getUserProperty('wsdl.url');
            $wsdlUrl = $wsdlUrl ? $wsdlUrl : static::WSDL_URL;

            /*
             * PROXY CONFIGURATION
             */

            // read the proxy configuration from the environment variables
            $proxy = $proxy ? current(array_filter(array(
                getenv('HTTP_PROXY'),
                getenv('http_proxy'),
            ), 'strlen')) : null;

            // prepare an empty url for the stream context
            $streamContextProxyUrl = null;

            // if the proxy is configured in the system
            if ($proxy) {
                // parse the WSDL url
                $parsedWsdlPath = Url::createFromUrl($wsdlUrl);

                // parse the proxy url
                $proxy = Url::createFromUrl($proxy);

                // if not fetching the wsdl file from filesystem and a proxy has been configured
                if ($parsedWsdlPath->getScheme()->get() !== 'file') {
                    $streamContextProxyUrl = 'tcp://' . $proxy->getAuthority() . $proxy->getRelativeUrl();

                    libxml_set_streams_context(
                        stream_context_get_default(
                            array(
                                $proxy->getScheme()->get() => array(
                                    'proxy' => $streamContextProxyUrl,
                                    'request_fulluri' => true,
                                )
                            )
                        )
                    );

                }
            }

            /*
             * INITIALIZATION
             */

            // prepare the path to the generated code
            $outputDir = $this->project->getBasedir() . '/src';

            $output = new ConsoleOutput();
            $progress = new ProgressBar($output, 100);
            $progress->setFormat(ProgressBar::getFormatDefinition('normal') . ' %message%...');
            $progress->setMessage('Starting');

            $progress->start();

            $progress->setMessage('Cleaning the environment');

            // clean the output directory
            array_map('unlink', glob($outputDir . '/*'));
            $progress->advance(10);

            /*
             * GENERATION
             */

            // prepare the generator configuration
            $progress->setMessage('Configuring the generator');

            $optionFeatures = array();

            if ($proxy) {
                /* @var \League\Url\UrlInterface $proxy */
                $optionFeatures['proxy_host'] = $proxy->getHost()->get();
                $optionFeatures['proxy_port'] = $proxy->getPort()->get();
            }

            $config = new Config($wsdlUrl, $outputDir);
            $config->setNoTypeConstructor(true);
            $config->setOptionFeatures($optionFeatures);
            $config->setCreateAccessors(false);
            $config->setWsdlCache(false);
            $progress->advance(10);

            // generate the code
            $progress->setMessage('Generating the code');
            $gen = new Generator();
            $gen->generate($config);
            $progress->advance(10);

            /*
             * FIX
             */

            // the 'optionFeatures' configuration options is misused by the generator:
            // it is correctly used as the default 'features' options of the service (its values are bitwised and put
            // in the service class constructor), but it is also used as the '$options' argument of the \SoapClient
            // class when it connects to the service to inspect it (hence the need to define the 'proxy_host' and
            // 'proxy_port' keys). this makes the generated code clash, so we need to fix it, removing the unneeded
            // values from the bitwise operation.

            $defaultFeatures = array(
                'SOAP_SINGLE_ELEMENT_ARRAYS',
                'SOAP_WAIT_ONE_WAY_CALLS',
            );

            // fix the option 'features' management
            $fileContent = file_get_contents("{$outputDir}/ClabService.php");
            $fileContent = preg_replace('/(\$options\[\'features\'\] = ).*/', '$1' . implode(' | ', $defaultFeatures) . ';', $fileContent, -1, $count);

            // if no features option has been found, they must be added manually
            if ($count === 0) {
                $fileContent = preg_replace('/parent::__construct/', "if (isset(\$options['features']) == false) {\n\$options['features'] = " . implode(' | ', $defaultFeatures) . ";\n}\n\nparent::__construct", $fileContent, -1, $count);
            }

            file_put_contents("{$outputDir}/ClabService.php", $fileContent);

            /*
             * LICENSE MANAGEMENT
             */

            $progress->setMessage('Applying the license to the generated files');
            // read the license header
            $licenseHeader = file_get_contents($this->project->getBasedir() . '/resources/license_header.txt');

            // print the license on top of every file
            foreach (glob($outputDir . '/*.php') as $sourceFile) {
                $fileContent = file_get_contents($sourceFile);
                $fileContent = preg_replace('/^(<\?php)/', "\$1\n\n" . $licenseHeader, $fileContent);
                file_put_contents($sourceFile, $fileContent);
            }

            unset($sourceFile);

            $progress->advance(10);

            /*
             * CODING STANDARDS FIXES
             */

            // create the coding standards fixer
            $progress->setMessage('Configuring the Coding Standards fixer');
            $fixer = new Fixer();
            $csConfig = new CSConfig();
            $csConfig->setDir($outputDir);
            $progress->advance(10);

            // register all the existing fixers
            $fixer->registerBuiltInFixers();
            $progress->advance(10);

            // register all fixers from all PSR levels
            /* @var $csFixer \Symfony\CS\FixerInterface */
            $fixers = array();
            foreach ($fixer->getFixers() as $csFixer) {
                if ($csFixer->getLevel() === ($csFixer->getLevel() & FixerInterface::PSR2_LEVEL)) {
                    $fixers[] = $csFixer;
                }
            }

            // fix the generated code
            $progress->setMessage('Fixing the generated code');
            $csConfig->fixers($fixers);
            $progress->advance(10);

            $fixer->fix($csConfig);
            $progress->advance(10);

            $progress->setFormat(ProgressBar::getFormatDefinition('normal') . ' %message%');
            $progress->setMessage('Done');
            $progress->finish();

            $output->writeln('');

        } catch (\Exception $e) {
            $this->log($e->getMessage(), \Project::MSG_ERR);
        }
    }
}
