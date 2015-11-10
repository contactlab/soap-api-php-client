# soap-api-php-client

The PHP client for the ContactLab SOAP API

## Installation

### Composer

Add this package to your project dependencies using [Composer](https://getcomposer.org/doc/00-intro.md):

#### Require the last version

You can choose to install any version of the client, but if you don't specify any version, Composer will automatically select the last available version for you, using the `^` operator:

```
composer require contactlab/soap-api-php-client
```

## Customization

The PHP classes of the client are generated from the WSDL document describing the service.
If you need, you can regenerate the code running the following command:

```
vendor/bin/phing generate:code
```

In this way, you are able to modify the generator task and customize the generated code according to your needs.
