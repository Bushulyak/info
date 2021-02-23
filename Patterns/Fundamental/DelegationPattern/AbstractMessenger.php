<?php

declare(strict_types=1);

namespace Patterns\Fundamental\DelegationPattern;

/**
 * Class AbstractMessenger
 *
 * @package Patterns\Fundamental\DelegationPattern
 */
abstract class AbstractMessenger implements MessengerInterface
{
	/**
	 * @var string
	 */
	protected string $sender;

	/**
	 * @var string
	 */
	protected string $recipient;

	/**
	 * @var string
	 */
	protected string $subject;

	/**
	 * @var string
	 */
	protected string $message;

	/**
	 * @inheritdoc
	 */
	public function setSender(string $sender): MessengerInterface
	{
		$this->sender = $sender;

		return $this;
	}

	/**
	 * @inheritdoc
	 */
	public function setRecipient(string $recipient): MessengerInterface
	{
		$this->recipient = $recipient;

		return $this;
	}

	/**
	 * @inheritdoc
	 */
	public function setSubject(string $subject): MessengerInterface
	{
		$this->subject = $subject;

		return $this;
	}

	/**
	 * @inheritdoc
	 */
	public function setMessage(string $message): MessengerInterface
	{
		$this->message = $message;

		return $this;
	}

	/**
	 * @inheritdoc
	 */
	public function send(): bool
	{
		return true;
	}
}
