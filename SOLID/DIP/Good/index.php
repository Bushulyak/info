<?php

use SOLID\DIP\Good\HighRankingMale as HighRankingMale;
use SOLID\DIP\Good\Wife as Wife;

require_once __DIR__ . '/../../../vendor/autoload.php';

$foodProvider = new Wife();
$lowRankingMale = new HighRankingMale($foodProvider);
$lowRankingMale->eat();
