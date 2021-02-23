<?php

declare(strict_types=1);

namespace Patterns\Fundamental\DelegationPattern;

/**
 * Class Info
 *
 * @package Patterns\Fundamental\DelegationPattern
 */
class Info
{
	/**
	 * @var string
	 */
	private static string $title = 'Делегирование (Delegation)';

	/**
	 * @var string
	 */
	private static string $description = 'Делегирование (англ. Delegation) — основной шаблон проектирования, в котором объект внешне выражает некоторое поведение, но в реальности передаёт ответственность за выполнение этого поведения связанному объекту. Шаблон делегирования является фундаментальной абстракцией, на основе которой реализованы другие шаблоны — композиция (также называется агрегацией), примеси (mixins) и аспекты (aspects).';

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
