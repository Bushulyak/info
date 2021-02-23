<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Class Publisher
 *
 * @package Patterns\Fundamental\EventChannelPattern
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
