<?php

/**
 * Fix Wsdl2PhpGenerator source code
 */

$validator = __DIR__ . '/../vendor/wsdl2phpgenerator/wsdl2phpgenerator/src/Wsdl2PhpGenerator/Validator.php';
$enum      = __DIR__ . '/../vendor/wsdl2phpgenerator/wsdl2phpgenerator/src/Wsdl2PhpGenerator/Enum.php';

/*
 * INVALID NAMES PREFIX & SUFFIX
 */

if (file_exists($validator)) {

    $content = file_get_contents($validator);

    // replace the 'a' prefix for constants with a '_'
    $content = preg_replace("/'a'/m", "'_'", $content);

    // do not add a 'Custom' suffix to the generated classes if already axists a class with the same name, but overwrite
    $content = preg_replace('/return \!\$isKeyword &&/', 'return !$isKeyword;', $content);
    $content = preg_replace('/\!interface_exists\(\$name\) &&/', '', $content);
    $content = preg_replace('/\!class_exists\(\$name\);/', '', $content);

    // replace the anyType XSD type with a generic 'mixed' PhpDoc type
    $code =<<<EOT
            case 'anytype':
                return 'mixed';
                break;
            default:
EOT;

    $content = preg_replace("/^[[:space:]]*default:/m", $code, $content);

    file_put_contents($validator, $content);
}

/*
 * ENUM DEFAULT VALUES
 */

if (file_exists($enum)) {

    $content = file_get_contents($enum);

    $content = preg_replace('/\$first = true;/m', '$first = false;', $content);

    // remove enum default values
    file_put_contents($enum, $content);
}
