<?php

declare(strict_types=1);

namespace Patterns\Fundamental\DelegationPattern;

/**
 * Interface MessengerInterface
 *
 * @package Patterns\Fundamental\DelegationPattern
 */
interface MessengerInterface
{
	/**
	 * @param string $sender
	 *
	 * @return MessengerInterface
	 */
	public function setSender(string $sender): MessengerInterface;

	/**
	 * @param string $recipient
	 *
	 * @return MessengerInterface
	 */
	public function setRecipient(string $recipient): MessengerInterface;

	/**
	 * @param string $subject
	 *
	 * @return MessengerInterface
	 */
	public function setSubject(string $subject): MessengerInterface;

	/**
	 * @param string $message
	 *
	 * @return MessengerInterface
	 */
	public function setMessage(string $message): MessengerInterface;

	/**
	 * @return bool
	 */
	public function send(): bool;
}
