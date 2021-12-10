<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once  __DIR__ . '/settings.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$setting = [
    'driver' => $_SERVER['DRIVER'],
    'host' => $_SERVER['HOST'],
    'username' => $_SERVER['USERNAME'],
    'database' => $_SERVER['DATABASE'],
    'password' => $_SERVER['PASSWORD'],
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'flags' => [
        // Turn off persistent connections
        PDO::ATTR_PERSISTENT => false,
        // Enable exceptions
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Emulate prepared statements
        PDO::ATTR_EMULATE_PREPARES => true,
        // Set default fetch mode to array
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // Set character set
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
    ],
];

$capsule = new Capsule;
$capsule->addConnection($setting);
$capsule->bootEloquent();
