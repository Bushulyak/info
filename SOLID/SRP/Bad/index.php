<?php

use SOLID\SRP\Bad\Product as Product;

require_once __DIR__ . '/../../../vendor/autoload.php';

$product = new Product();
$product->setPrice(10);
echo $product->getPrice() . PHP_EOL;
