<?php

declare(strict_types=1);

namespace Patterns\Fundamental\InterfacePattern;

/**
 * Interface PublisherInterface
 *
 * @package Patterns\Fundamental\InterfacePattern
 */
interface PublisherInterface
{
	/**
	 * @param string $message
	 */
	public function publish(string $message): void;
}
