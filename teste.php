<?php

use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/vendor/autoload.php';

$entityMangerFactory = new EntityManagerFactory();
$entityManger = $entityMangerFactory->getEntityManager();

var_dump($entityManger->getConnection());

