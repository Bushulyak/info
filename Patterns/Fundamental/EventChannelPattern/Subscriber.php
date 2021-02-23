<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Class Subscriber
 *
 * @package Patterns\Fundamental\EventChannelPattern
 */
class Subscriber implements SubscriberInterface
{
	/**
	 * @var string
	 */
	private string $name;

	/**
	 * Subscriber constructor.
	 *
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $message
	 */
	public function notify(string $message): void
	{
		echo "{$this->getName()} оповещен(а) данными [{$message}]\n";
	}
}
