<?php

declare(strict_types=1);

namespace Patterns\Fundamental\InterfacePattern;

/**
 * Class Publisher
 *
 * @package Patterns\Fundamental\InterfacePattern
 */
class Publisher implements PublisherInterface
{
	/**
	 * @var string
	 */
	private string $topic;

	/**
	 * @var EventChannelInterface
	 */
	private EventChannelInterface $eventChannel;

	/**
	 * Publisher constructor.
	 *
	 * @param string                $topic
	 * @param EventChannelInterface $eventChannel
	 */
	public function __construct(string $topic, EventChannelInterface $eventChannel)
	{
		$this->topic = $topic;
		$this->eventChannel = $eventChannel;
	}

	/**
	 * @inheritdoc
	 */
	public function publish(string $message): void
	{
		$this->eventChannel->publish($this->topic, $message);
	}
}
