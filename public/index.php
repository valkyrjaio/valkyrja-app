<?php
/*
 * This file is part of the Valkyrja framework.
 *
 * (c) Melech Mizrachi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// require_once '../vendor/autoload.php';

/*
 *-------------------------------------------------------------------------
 * Start Up The Application
 *-------------------------------------------------------------------------
 *
 * TODO: Fill with explanation
 *
 */
require_once '../framework/Application.php';

// Set a new global variable for the application!
$app = new \Valkyrja\Application(
    realpath(__DIR__ . '/../')
);

/*
 *-------------------------------------------------------------------------
 * Application Auto Loader Assemble!
 *-------------------------------------------------------------------------
 *
 * TODO: Fill with explanation
 *
 */
// Setup the auto loader for the Application namespace
// - Using our own auto loading for better optimization
$app->autoloader('App\\', $app->appPath());
$app->autoloader('GuzzleHttp\\', $app->vendorPath('guzzlehttp/guzzle/src'));
$app->autoloader('GuzzleHttp\\Promise\\', $app->vendorPath('guzzlehttp/promises/src'));
$app->autoloader('GuzzleHttp\\Psr7\\', $app->vendorPath('guzzlehttp/psr7/src'));
$app->autoloader('League\\Flysystem\\', $app->vendorPath('league/flysystem/src'));
$app->autoloader('Monolog\\', $app->vendorPath('monolog/monolog/src/Monolog'));
$app->autoloader('Predis\\', $app->vendorPath('predis/predis/src'));
$app->autoloader('Psr\\Log\\', $app->vendorPath('psr/log/Psr/Log'));
$app->autoloader('Psr\\Http\\Message\\', $app->vendorPath('psr/http-message/src'));

/*
/*
 *-------------------------------------------------------------------------
 * Setup The Application With Compiled : A Need For Speed
 *-------------------------------------------------------------------------
 *
 * TODO: Fill with explanation
 *
 */
// If there is a compiled version of the application use it!
if (file_exists(__DIR__ . '/../cache/compiled.php')) {
    // Require the compiled file
    require_once __DIR__ . '/../cache/compiled.php';

    // Set the application as using compiled
    $app->setCompiled();
}

/*
 *-------------------------------------------------------------------------
 * Setup the Application Without Compiled : SlowBro
 *-------------------------------------------------------------------------
 *
 * TODO: Fill with explanation
 *
 */
// Otherwise setup environment variables
else {
    /*
     *---------------------------------------------------------------------
     * Help An Application Out, Will Ya?
     *---------------------------------------------------------------------
     *
     * TODO: Fill with explanation
     *
     */
    require_once __DIR__ . '/../framework/helpers.php';

    /*
     *---------------------------------------------------------------------
     * Setup The Application Environment Variables
     *---------------------------------------------------------------------
     *
     * TODO: Fill with explanation
     *
     */
    // Require the environment variables to overwrite default config
    $env = require_once __DIR__ . '/../env.php';
    // Set the environment variables to overwrite default config
    $app->setEnvs($env);

    /*
     *---------------------------------------------------------------------
     * Setup The Application Default Configuration
     *---------------------------------------------------------------------
     *
     * TODO: Fill with explanation
     *
     */
    // Require the default config variables
    $config = require_once __DIR__ . '/../config/config.php';
    // Set the default config variables
    $app->setConfigVars($config);

    /*
     *---------------------------------------------------------------------
     * Setup The Application Service Container : Dependency Injection
     *---------------------------------------------------------------------
     *
     * TODO: Fill with explanation
     *
     */
    // Require any dependency injectable definitions
    $container = require_once __DIR__ . '/../config/container.php';
    // Set the container variables
    $app->setServiceContainer($container);

    /*
     *---------------------------------------------------------------------
     * Setup The Application Routes
     *---------------------------------------------------------------------
     *
     * TODO: Fill with explanation
     *
     */
    // Require the routes
    $routes = require_once __DIR__ . '/../routes/routes.php';
}

// Set the timezone for the application process
$app->setTimezone();
// Check if twig is enabled and bootstrap it
$app->bootstrapTwig();

/*
 *-------------------------------------------------------------------------
 * Service Providers : Providers Of The Services
 *-------------------------------------------------------------------------
 *
 * TODO: Fill with explanation
 *
 */
// $app->register(App\Providers\AppServiceProvider::class);

/*
 *-------------------------------------------------------------------------
 * Run The Application
 *-------------------------------------------------------------------------
 *
 * TODO: Fill with explanation
 *
 */
$app->run();
