<?php

use Patterns\Fundamental\DelegationPattern\AppMessenger as AppMessenger;
use Patterns\Fundamental\DelegationPattern\Info as Info;

require_once __DIR__ . '/../../../vendor/autoload.php';

$title = Info::getTitle();
$description = Info::getDescription();

echo $title . \str_repeat(PHP_EOL, 2);
echo $description . \str_repeat(PHP_EOL, 2);

$messenger = new AppMessenger();

$messenger->setSender('sender@mail.com')
	->setRecipient('recipient@mail.com')
	->setSubject($title)
	->setMessage($description)
	->send();

$messenger->toTelegram()
	->setRecipient('111111111')
	->setMessage("$title\n\n$description")
	->send();
