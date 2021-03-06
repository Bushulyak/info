<?php

declare(strict_types=1);

namespace Patterns\Fundamental\InterfacePattern;

/**
 * Class Info
 *
 * @package Patterns\Fundamental\InterfacePattern
 */
class Info
{
    /**
     * @var string
     */
    private static string $title = 'Интерфейс (interface)';

    /**
     * @var string
     */
    private static string $description = <<<STR
Интерфейс (англ. interface) — основной шаблон проектирования, являющийся общим методом для структурирования компьютерных программ для того, чтобы их было проще понять. В общем интерфейс — это класс, который обеспечивает программисту простой или более программно-специфический способ доступа к другим классам.

Интерфейс может содержать набор объектов и обеспечивать простую, высокоуровневую функциональность для программиста (например, Шаблон Фасад); он может обеспечить более чистый или более специфический способ испольщования сложных классов («класс-обёртка»); он может использоваться в качестве «клея» между двумя различными API (Шаблон Адаптер);

Другими типами интерфейсных шаблонов являются:
Шаблон делегирования, Шаблон компоновщик и Шаблон мост.
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
