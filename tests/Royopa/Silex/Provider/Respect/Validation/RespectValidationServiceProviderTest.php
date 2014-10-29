<?php

/*
 * This file is a test to service provider for the Silex framework
 * of the Respect/Validation Project.
 *
 * @author Rodrigo Prado de Jesus <royopa@gmail.com>
 *
 */

namespace Royopa\Silex\Provider\Respect\Validation;

use Silex\Application;

/**
 * RespectValidationServiceProviderTest
 */
class RespectValidationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Application();
        $app->register(new RespectValidationServiceProvider());
        $this->assertInstanceOf('Respect\Validation\Validator', $app['respect.validator']);
    }

    public function testCountryCode()
    {
        $app = new Application();
        $app->register(new RespectValidationServiceProvider());
        $this->assertTrue(
            $app['respect.validator']::countryCode()
            ->validate('BR')
        );
    }

    public function testAlwaysValid()
    {
        $app = new Application();
        $app->register(new RespectValidationServiceProvider());
        $this->assertTrue(
            $app['respect.validator']::alwaysValid()
            ->validate('sojdnfjsdnfojsdnfos dfsdofj sodjf ')
        );
    }

    public function testAlwaysInvalid()
    {
        $app = new Application();
        $app->register(new RespectValidationServiceProvider());
        $this->assertFalse(
            $app['respect.validator']::alwaysInvalid()
            ->validate('sojdnfjsdnfojsdnfos dfsdofj sodjf ')
        );
    }
}
