<?php

declare(strict_types=1);

namespace Patterns\Fundamental\PropertyContainerPattern;

/**
 * Class Info
 *
 * @package Patterns\Fundamental\PropertyContainerPattern
 */
class Info
{
	/**
	 * @var string
	 */
	private static string $title = 'Контейнер свойств (property container)';

	/**
	 * @var string
	 */
	private static string $description = <<<STR
Контейнер свойств (англ. property container) — фундаментальный шаблон проектирования, который служит для обеспечения возможности уже построенного приложения динамически расширять свои свойства, а в общем случае функциональность.

Это достигается путем добавления дополнительных свойств непосредственно самому объекту в некоторый «контейнер свойств», вместо расширения класса объекта новыми свойствами.
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
