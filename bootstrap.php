<?php

require __DIR__.'/vendor/autoload.php';
(Dotenv\Dotenv::createImmutable(__DIR__))->load();

$config = [
    'dsn' => $_ENV['DB_DRIVER'].':host='. $_ENV['DB_HOST'] .';dbname=' . $_ENV['DB_NAME'], 
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD']
];

\GW\Db\DbSingleton::configure($config);