<?php

require_once "vendor/autoload.php";
session_start();

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("src/Entity");
$isDevMode = true; // Évite les erreurs "class not found /tmp/__CG_Proxy...."

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'doctrine',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

if (isset($_SESSION['user'])) {
    $currentUser = $entityManager->merge($_SESSION['user']);
}
