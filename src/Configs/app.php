<?php

use App\Installer\Database\MySqlSetup;

return [
    'min_php_version' => '8.4',

    'repository' => '-b v9.0.2-hdz https://github.com/Shuin596/unit3d',

    'database_installers' => [
        /**
         * Map to the Installer class
         */
        'MySql' => MySqlSetup::class,
    ],

    /*
     * Dynamically set configuration defaults and placeholders
     *
     * These do NOT need policy classes
     */

    /* Main Server */
    'server_name' => '',
    'ip' => '',
    'hostname' => '',
    'ssl' => true,
    'owner' => '',
    'owner_email' => '',
    'password' => '',

    /* Database */
    'database_driver' => 'MySql',

    'db' => '',
    'dbuser' => '',
    'dbpass' => '',
    'dbrootpass' => '',

    /* Mail */
    'mail_driver' => 'smtp',
    'mail_host' => '',
    'mail_port' => '',
    'mail_username' => '',
    'mail_password' => '',
    'mail_from_name' => '',

    /* Chat */
    'echo-port' => '',

    /* API Keys */
    'tmdb-key' => '',
];
