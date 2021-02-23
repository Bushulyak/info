<?php

use SOLID\SRP\Good\Logger as Logger;
use SOLID\SRP\Good\Product as Product;

require_once __DIR__ . '/../../../vendor/autoload.php';

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);
echo $product->getPrice() . PHP_EOL;
