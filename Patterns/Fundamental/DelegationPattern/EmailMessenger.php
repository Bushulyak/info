<?php

declare(strict_types=1);

namespace Patterns\Fundamental\DelegationPattern;

/**
 * Class EmailMessenger
 *
 * @package Patterns\Fundamental\DelegationPattern
 */
class EmailMessenger extends AbstractMessenger
{
	/**
	 * @inheritdoc
	 */
	public function send(): bool
	{
		return \mail($this->recipient, $this->subject, $this->message, $this->getHeaders($this->sender));
	}

	/**
	 * @param string $sender
	 *
	 * @return string
	 */
	private function getHeaders(string $sender): string
	{
		return "From: $sender\r\n" .
			"Reply-To: $sender\r\n" .
			"X-Mailer: PHP/" . \phpversion();
	}
}
