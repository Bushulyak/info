<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Class Info
 *
 * @package Patterns\Fundamental\EventChannelPattern
 */
class Info
{
	/**
	 * @var string
	 */
	private static string $title = 'Канал событий (event channel)';

	/**
	 * @var string
	 */
	private static string $description = <<<STR
Канал событий (англ. event channel) — фундаментальный шаблон проектирования, используется для создания канала связи и коммуникации через него посредством событий.

Этот канал обеспечивает возможность разным издателям публиковать события и подписчикам, подписываться на них, получать уведомление.
STR;

	/**
	 * @return string
	 */
	public static function getTitle(): string
	{
		return static::$title;
	}

	/**
	 * @return string
	 */
	public static function getDescription(): string
	{
		return static::$description;
	}
}
