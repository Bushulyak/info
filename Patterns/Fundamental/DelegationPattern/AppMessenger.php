<?php

declare(strict_types=1);

namespace Patterns\Fundamental\DelegationPattern;

/**
 * Class AppMessenger
 *
 * @package Patterns\Fundamental\DelegationPattern
 *
 * Методы [setSender, setRecipient, setSubject, setMessage, send] делегируют выполнение задач $this->messenger
 */
class AppMessenger implements MessengerInterface
{
	/**
	 * @var MessengerInterface
	 */
	private MessengerInterface $messenger;

	/**
	 * AppMessenger constructor.
	 */
	public function __construct()
	{
		$this->toEmail();
	}

	/**
	 * @return MessengerInterface
	 */
	public function toEmail(): MessengerInterface
	{
		$this->messenger = new EmailMessenger();

		return $this;
	}

	/**
	 * @return MessengerInterface
	 */
	public function toTelegram(): MessengerInterface
	{
		$this->messenger = new TelegramMessenger();

		return $this;
	}

	/**
	 * @inheritdoc
	 */
	public function setSender(string $sender): MessengerInterface
	{
		$this->messenger->setSender($sender);

		return $this->messenger;
	}

	/**
	 * @inheritdoc
	 */
	public function setRecipient(string $recipient): MessengerInterface
	{
		return $this->messenger->setRecipient($recipient);

		return $this->messenger;
	}

	/**
	 * @inheritdoc
	 */
	public function setSubject(string $subject): MessengerInterface
	{
		return $this->messenger->setSubject($subject);

		return $this->messenger;
	}

	/**
	 * @inheritdoc
	 */
	public function setMessage(string $message): MessengerInterface
	{
		return $this->messenger->setMessage($message);

		return $this->messenger;
	}

	/**
	 * @inheritdoc
	 */
	public function send(): bool
	{
		return $this->messenger->send();
	}
}
