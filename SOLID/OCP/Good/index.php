<?php

use SOLID\OCP\Good\DBLogger as DBLogger;
use SOLID\OCP\Good\Product as Product;

require_once __DIR__ . '/../../../vendor/autoload.php';

$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);
echo $product->getPrice() . PHP_EOL;
