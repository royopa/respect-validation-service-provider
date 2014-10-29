<?php

/*
 * This file is a service provider for the Silex framework of the Respect/Validation Project.
 *
 * @author Rodrigo Prado de Jesus <royopa@gmail.com>
 *
 */

namespace Royopa\Silex\Provider\Respect\Validation;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Respect\Validation\Validator;

/**
 * RespectValidationServiceProvider
 */
class RespectValidationServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Application $app)
    {
        $app['respect.validator'] = $app->share(function ($app) {
            return new Validator();
        });
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    public function boot(Application $app)
    {
    }
}
