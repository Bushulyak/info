<?php

use Patterns\Fundamental\InterfacePattern\Info as Info;
use Patterns\Fundamental\InterfacePattern\EventChannelJob as EventChannelJob;

require_once __DIR__ . '/../../../vendor/autoload.php';

$title = Info::getTitle();
$description = Info::getDescription();

echo $title . \str_repeat(PHP_EOL, 2);
echo $description . \str_repeat(PHP_EOL, 2);

$eventChannelJob = new EventChannelJob();
/**
 * Метод run выполняет большое количество действий.
 * Для того чтобы запустить этот процесс мы используем одну функцию.
 * Этот подход и описывает фундаментальный Шаблон проектирования — Интерфейс.
 */
$eventChannelJob->run();
