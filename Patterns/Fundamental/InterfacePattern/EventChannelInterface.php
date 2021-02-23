<?php

declare(strict_types=1);

namespace Patterns\Fundamental\InterfacePattern;

/**
 * Interface EventChannelInterface
 *
 * @package Patterns\Fundamental\InterfacePattern
 */
interface EventChannelInterface
{
	/**
	 * @param string $topic
	 * @param string $data
	 */
	public function publish(string $topic, string $data): void;

	/**
	 * @param string              $topic
	 * @param SubscriberInterface $subscriber
	 */
	public function subscribe(string $topic, SubscriberInterface $subscriber): void;
}
