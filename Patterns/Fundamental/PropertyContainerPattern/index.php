<?php

use Patterns\Fundamental\PropertyContainerPattern\BlogPost as BlogPost;
use Patterns\Fundamental\PropertyContainerPattern\Info as Info;

require_once __DIR__ . '/../../../vendor/autoload.php';

$title = Info::getTitle();
$description = Info::getDescription();

echo $title . \str_repeat(PHP_EOL, 2);
echo $description . \str_repeat(PHP_EOL, 2);

$item = new BlogPost();

$item->setTitle('Заголовок статьи');
$item->setCategory(10);

$item->addProperty('view_count', 100);

$item->addProperty('last_update', '2021-02-20');
$item->setProperty('last_update', '2021-02-21');

$item->addProperty('read_only', true);
$item->deleteProperty('read_only');

\print_r($item);
