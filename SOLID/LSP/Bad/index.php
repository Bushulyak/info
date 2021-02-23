<?php

use SOLID\LSP\Bad\Bird as Bird;
use SOLID\LSP\Bad\BirdRun as BirdRun;
use SOLID\LSP\Bad\Duck as Duck;
use SOLID\LSP\Bad\Penguin as Penguin;

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
