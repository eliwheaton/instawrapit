<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | All of the database connections used by your application. Many of your
    | applications will no doubt only use one connection; however, you have
    | the freedom to specify as many connections as you can handle.
    |
    | All database work in Laravel is done through the PHP's PDO facilities,
    | so make sure you have the PDO drivers for your particular database of
    | choice installed on your machine.
    |
    */

    'connections' => array(

        'sqlite' => array(
            'driver'   => 'sqlite',
            'database' => 'application',
            'prefix'   => '',
        ),

        'mysql' => array(
            'driver'      => 'mysql',
            'host'        => 'localhost',
            'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
            'database'    => 'instawrapit',
            'username'    => 'iw_admin',
            'password'    => 'fAtha8Ubre6A',
            'charset'     => 'utf8',
            'prefix'      => '',
        ),

        'pgsql' => array(
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => 'database',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ),

        'sqlsrv' => array(
            'driver'   => 'sqlsrv',
            'host'     => 'localhost',
            'database' => 'database',
            'username' => 'root',
            'password' => '',
            'prefix'   => '',
        ),

    )

);