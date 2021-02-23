<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Interface EventChannelInterface
 *
 * @package Patterns\Fundamental\EventChannelPattern
 */
interface EventChannelInterface
{
	/**
	 * @param string $topic
	 * @param string $data
	 *
	 * Издатель уведомляет канал о том что надо всех кто подписан на тему $topic уведомить данными $data
	 */
	public function publish(string $topic, string $data): void;

	/**
	 * @param string              $topic
	 * @param SubscriberInterface $subscriber
	 *
	 * Подписчик $subscriber подписывается на событие (тему) $topic
	 */
	public function subscribe(string $topic, SubscriberInterface $subscriber): void;
}
