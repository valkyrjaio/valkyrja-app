<?php

namespace Valkyrja\Config\Sub;

use Valkyrja\Config\Config;

use Valkyrja\Contracts\Application;

class ViewsConfig
{
    /**
     * Templates directory.
     *
     * @var string
     */
    public $dir;

    /**
     * Twig views config.
     *
     * @var TwigViewsConfig
     */
    public $twig;

    /**
     * Set defaults?
     *
     * @var bool
     */
    protected $setDefaults = true;

    /**
     * ViewsConfig constructor.
     *
     * @param \Valkyrja\Contracts\Application $app
     */
    public function __construct(Application $app)
    {
        if ($this->setDefaults) {
            $this->dir = Config::env('VIEWS_DIR') ?? $app->resourcesPath('views/php');

            $this->twig = new TwigViewsConfig($app);
        }
    }
}
