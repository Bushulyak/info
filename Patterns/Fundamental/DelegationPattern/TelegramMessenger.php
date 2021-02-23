<?php

declare(strict_types=1);

namespace Patterns\Fundamental\DelegationPattern;

use \Exception as Exception;

/**
 * Class TelegramMessenger
 *
 * @package Patterns\Fundamental\DelegationPattern
 */
class TelegramMessenger extends AbstractMessenger
{
	public const API = 'https://api.telegram.org/bot';
	private const TOKEN = 'secret';

	/**
	 * @param string      $chatId
	 * @param string      $text
	 * @param string|null $replyMarkup
	 * @param string|null $parseMode
	 * @param bool|null   $disablePreview
	 * @param bool|null   $disableNotification
	 * @param string|null $replyMsgId
	 *
	 * @return array
	 */
	public function sendMessage(
		string $chatId,
		string $text,
		?string $replyMarkup = null,
		?string $parseMode = null,
		?bool $disablePreview = false,
		?bool $disableNotification = false,
		?string $replyMsgId = null
	): array
	{
		$url = \sprintf('%s%s/%s?', self::API, self::TOKEN, __FUNCTION__) . \http_build_query([
				'chat_id' => $chatId,
				'text' => $text,
				'reply_markup' => $replyMarkup,
				'parse_mode' => $parseMode,
				'disable_web_page_preview' => $disablePreview,
				'disable_notification' => $disableNotification,
				'reply_to_message_id' => $replyMsgId,
			]);

		try {
			$response = \file_get_contents($url);

			return \json_decode($response, true);
		} catch (\Exception $exception) {
			return [];
		}
	}

	/**
	 * @inheritdoc
	 */
	public function send(): bool
	{
		$response = $this->sendMessage($this->recipient, $this->message);

		return $response['ok'] ?? false;
	}
}
