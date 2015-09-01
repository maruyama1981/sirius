<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'host'        => 'testdb.cedx29aizopt.ap-northeast-1.rds.amazonaws.com',
        'username'    => 'pman',
        'password'    => 'NBs73j(Dhqe#',
        'dbname'      => 'sunpexist_db_test',
        // 'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'logDir'       => APP_PATH . '/app/log/',
        'baseUri'        => '/sirius/',
    )
));
