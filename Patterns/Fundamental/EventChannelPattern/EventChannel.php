<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Class EventChannel
 *
 * @package Patterns\Fundamental\EventChannelPattern
 */
class EventChannel implements EventChannelInterface
{
	/**
	 * @var array
	 */
	private array $topics = [];

	/**
	 * @param string $topic
	 * @param string $data
	 */
	public function publish(string $topic, string $data): void
	{
		if (empty($this->topics[$topic])) {
			return;
		}

		foreach ($this->topics[$topic] as $subscriber) {
			$subscriber->notify($data);
		}
	}

	/**
	 * @param string              $topic
	 * @param SubscriberInterface $subscriber
	 */
	public function subscribe(string $topic, SubscriberInterface $subscriber): void
	{
		$this->topics[$topic][] = $subscriber;

		echo "{$subscriber->getName()} подписан на [{$topic}]\n";
	}
}
