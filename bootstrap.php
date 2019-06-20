<?php
require_once "vendor/autoload.php";
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$connectionParams = array(
    'dbname' => 'cars',
    'user' => 'root',
    'password' => 'Rali870918',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
$entityManager = EntityManager::create($conn, $config);