<?php

/*
 *-------------------------------------------------------------------------
 * Database Configuration
 *-------------------------------------------------------------------------
 *
 * Persist your application's data through a data store using a database
 * connection method. All configurations for getting you going with
 * a few different data stores is available here.
 *
 */

use Valkyrja\Config\Enums\ConfigKeyPart as CKP;
use Valkyrja\Config\Enums\EnvKey;
use Valkyrja\ORM\Enums\Config;

return [
    /*
     *-------------------------------------------------------------------------
     * Default Database Connection Name
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    CKP::DEFAULT     => env(EnvKey::DB_CONNECTION, CKP::MYSQL),

    /*
     *-------------------------------------------------------------------------
     * Database Adapters
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    CKP::ADAPTERS    => env(
        EnvKey::DB_ADAPTERS,
        array_merge(
            Config::ADAPTERS,
            []
        )
    ),

    /*
     *-------------------------------------------------------------------------
     * Database Connections
     *-------------------------------------------------------------------------
     *
     * //
     *
     */
    CKP::CONNECTIONS => [

        CKP::MYSQL => [
            CKP::DRIVER      => CKP::MYSQL,
            CKP::HOST        => env(EnvKey::DB_HOST, '127.0.0.1'),
            CKP::PORT        => env(EnvKey::DB_PORT, '3306'),
            CKP::DB          => env(EnvKey::DB_DATABASE, CKP::VALHALLA),
            CKP::USERNAME    => env(EnvKey::DB_USERNAME, CKP::VALHALLA),
            CKP::PASSWORD    => env(EnvKey::DB_PASSWORD, ''),
            CKP::UNIX_SOCKET => env(EnvKey::DB_SOCKET, ''),
            CKP::CHARSET     => env(EnvKey::DB_CHARSET, 'utf8mb4'),
            CKP::COLLATION   => env(EnvKey::DB_COLLATION, 'utf8mb4_unicode_ci'),
            CKP::PREFIX      => env(EnvKey::DB_PREFIX, ''),
            CKP::STRICT      => env(EnvKey::DB_STRICT, true),
            CKP::ENGINE      => env(EnvKey::DB_ENGINE, null),
            CKP::ADAPTER     => env(EnvKey::DB_ADAPTER, CKP::PDO),
        ],

        CKP::PGSQL => [
            CKP::DRIVER   => CKP::PGSQL,
            CKP::HOST     => env(EnvKey::DB_HOST, '127.0.0.1'),
            CKP::PORT     => env(EnvKey::DB_PORT, '5432'),
            CKP::DB       => env(EnvKey::DB_DATABASE, CKP::VALHALLA),
            CKP::USERNAME => env(EnvKey::DB_USERNAME, CKP::VALHALLA),
            CKP::PASSWORD => env(EnvKey::DB_PASSWORD, ''),
            CKP::CHARSET  => env(EnvKey::DB_CHARSET, 'utf8'),
            CKP::PREFIX   => env(EnvKey::DB_PREFIX, ''),
            CKP::SCHEMA   => env(EnvKey::DB_SCHEMA, 'public'),
            CKP::SSL_MODE => env(EnvKey::DB_SSL_MODE, 'prefer'),
            CKP::ADAPTER  => env(EnvKey::DB_ADAPTER, CKP::PDO),
        ],

        CKP::SQLSRV => [
            CKP::DRIVER   => CKP::SQLSRV,
            CKP::HOST     => env(EnvKey::DB_HOST, 'localhost'),
            CKP::PORT     => env(EnvKey::DB_PORT, '1433'),
            CKP::DB       => env(EnvKey::DB_DATABASE, CKP::VALHALLA),
            CKP::USERNAME => env(EnvKey::DB_USERNAME, CKP::VALHALLA),
            CKP::PASSWORD => env(EnvKey::DB_PASSWORD, ''),
            CKP::CHARSET  => env(EnvKey::DB_CHARSET, 'utf8'),
            CKP::PREFIX   => env(EnvKey::DB_PREFIX, ''),
            CKP::ADAPTER  => env(EnvKey::DB_ADAPTER, CKP::PDO),
        ],

    ],

];
