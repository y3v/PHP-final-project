<?php

include_once 'view\chat.php';

use doctrine\ORM\Tools\Setup;
use doctrine\ORM\EntityManager;

$paths = array("/entity");
$isDevMOde = false;

//
$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'php_project',
    'host' => 'localhost',
    'port' => '3306'    
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);