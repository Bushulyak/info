<?php

use SOLID\LSP\Good\Bird as Bird;
use SOLID\LSP\Good\BirdRun as BirdRun;
use SOLID\LSP\Good\Duck as Duck;
use SOLID\LSP\Good\Penguin as Penguin;

require_once __DIR__ . '/../../../vendor/autoload.php';

$bird = new Bird();
$birdRun = new BirdRun($bird);
echo "Bird run speed: {$birdRun->getRunSpeed()}\n";

$duck = new Duck();
$duckRun = new BirdRun($bird);
echo "Duck run speed: {$duckRun->getRunSpeed()}\n";

$penguin = new Penguin();
$penguinRun = new BirdRun($bird);
echo "Penguin run speed: {$penguinRun->getRunSpeed()}\n";
