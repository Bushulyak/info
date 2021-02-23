<?php

use Patterns\Fundamental\EventChannelPattern\Info as Info;
use Patterns\Fundamental\EventChannelPattern\EventChannelJob as EventChannelJob;

require_once __DIR__ . '/../../../vendor/autoload.php';

$title = Info::getTitle();
$description = Info::getDescription();

echo $title . \str_repeat(PHP_EOL, 2);
echo $description . \str_repeat(PHP_EOL, 2);

$eventChannelJob = new EventChannelJob();
$eventChannelJob->run();
