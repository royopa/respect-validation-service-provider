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
}
