<?php

use SOLID\ISP\Bad\CarTransformer as CarTransformer;
use SOLID\ISP\Bad\SuperTransformer as SuperTransformer;

require_once __DIR__ . '/../../../vendor/autoload.php';

$superTransformer = new SuperTransformer();

echo $superTransformer->toCar() . PHP_EOL;
echo $superTransformer->toPlane() . PHP_EOL;
echo $superTransformer->toShip() . PHP_EOL;

$carTransformer = new CarTransformer();
echo $carTransformer->toCar() . PHP_EOL;
