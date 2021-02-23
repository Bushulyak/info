<?php

use SOLID\DIP\Bad\LowRankingMale as LowRankingMale;
use SOLID\DIP\Bad\MediumRankingMale as MediumRankingMale;
use SOLID\DIP\Bad\Wife as Wife;

require_once __DIR__ . '/../../../vendor/autoload.php';

$lowRankingMale = new LowRankingMale();
$lowRankingMale->eat();

$wife = new Wife();
$mediumRankingMale = new MediumRankingMale($wife);
$mediumRankingMale->eat();
