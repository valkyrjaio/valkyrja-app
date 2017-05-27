<?php

use Valkyrja\Support\Directory;

/*
 *-------------------------------------------------------------------------
 * Container Configuration
 *-------------------------------------------------------------------------
 *
 * The container is the go to place for any type of service the
 * application may need when it is running. All configurations
 * necessary to make it run correctly can be found here.
 *
 */
return [
    /*
     *-------------------------------------------------------------------------
     * Container Service Providers
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'providers'                 => env()::CONTAINER_PROVIDERS ?? [],

    /*
     *-------------------------------------------------------------------------
     * Container Core Components Service Providers
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'coreProviders'             => env()::CONTAINER_APP_PROVIDERS ?? [],

    /*
     *-------------------------------------------------------------------------
     * Container Dev Service Providers
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'devProviders'              => env()::CONTAINER_DEV_PROVIDERS ?? [],

    /*
     *-------------------------------------------------------------------------
     * Container Use Annotations
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'useAnnotations'            => env()::CONTAINER_USE_ANNOTATIONS ?? false,

    /*
     *-------------------------------------------------------------------------
     * Container Use Annotations Exclusively
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'useAnnotationsExclusively' => env()::CONTAINER_USE_ANNOTATIONS_EXCLUSIVELY ?? false,

    /*
     *-------------------------------------------------------------------------
     * Container Annotated Services
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'services'                  => env()::CONTAINER_SERVICES ?? [],

    /*
     *-------------------------------------------------------------------------
     * Container Annotated Context Services
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'contextServices'           => env()::CONTAINER_CONTEXT_SERVICES ?? [],

    /*
     *-------------------------------------------------------------------------
     * Container Bootstrap File Path
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'filePath'                  => env()::CONTAINER_FILE_PATH ?? Directory::bootstrapPath('container.php'),

    /*
     *-------------------------------------------------------------------------
     * Container Cache File Path
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'cacheFilePath'             => env()::CONTAINER_CACHE_FILE_PATH ?? Directory::cachePath('container.php'),

    /*
     *-------------------------------------------------------------------------
     * Container Use Cache File
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    'useCacheFile'              => env()::CONTAINER_USE_CACHE_FILE ?? true,
];