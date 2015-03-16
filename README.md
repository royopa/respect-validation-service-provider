RespectValidationServiceProvider
================================

Provides Respect Validation to use with Silex microframework.

http://documentup.com/Respect/Validation/

[![Build Status](https://travis-ci.org/royopa/respect-validation-service-provider.png?branch=master)](https://travis-ci.org/royopa/respect-validation-service-provider)

Requirements
------------

  - PHP 5.3+
  - Respect/Validation

Instalation
-----------

Package available on [Composer](https://packagist.org/packages/royopa/RespectValidationServiceProvider). Autoloading with [composer](http://getcomposer.org/) is [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) compatible.

    $ composer require "royopa/respect-validation-service-provider": "dev-master"
    
Or

You can include the following in your composer.json file:

```json
{
    "require": {
        "royopa/respect-validation-service-provider": "dev-master"
    }
}
```

Usage
-----

To use the provider, register `RespectValidationServiceProvider`.

```php
<?php
    use Silex\Application;
    use Royopa\Silex\Provider\Respect\Validation\RespectValidationServiceProvider;

    $app = new Application;

    $app->register(new RespectValidationServiceProvider());
```

The default Validator will now be accessible with `respect.validator` in the app container.

```php
<?php
    $validator = $app['respect.validator'];

    $number = 123;
    $validator::numeric()->validate($number); //true
```

Enjoy!
------
