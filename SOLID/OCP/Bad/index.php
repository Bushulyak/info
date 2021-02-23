<?php

use SOLID\OCP\Bad\Logger as Logger;
use SOLID\OCP\Bad\Product as Product;

require_once __DIR__ . '/../../../vendor/autoload.php';

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);
echo $product->getPrice() . PHP_EOL;
