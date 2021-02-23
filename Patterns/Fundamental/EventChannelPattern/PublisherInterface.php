<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Interface PublisherInterface
 *
 * @package Patterns\Fundamental\EventChannelPattern
 */
interface PublisherInterface
{
	/**
	 * @param string $message
	 */
	public function publish(string $message): void;
}
