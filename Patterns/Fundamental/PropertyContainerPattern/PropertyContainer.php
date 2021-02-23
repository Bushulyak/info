<?php

declare(strict_types=1);

namespace Patterns\Fundamental\PropertyContainerPattern;

use \RuntimeException as RuntimeException;

/**
 * Class PropertyContainer
 *
 * @package Patterns\Fundamental\PropertyContainerPattern
 */
class PropertyContainer implements PropertyContainerInterface
{
	/**
	 * @var array
	 *
	 * Вместо того чтобы расширять класс добавлением новых свойств - заводим некий контейнер свойств
	 */
	private array $propertyContainer = [];

	/**
	 * @inheritdoc
	 *
	 * Добавление нового свойства в некий контейнер свойств это фактически добавление элемента в массив по ключу
	 */
	public function addProperty($propertyName, $value): void
	{
		$this->propertyContainer[$propertyName] = $value;
	}

	/**
	 * @param $propertyName
	 */
	public function deleteProperty($propertyName): void
	{
		unset($this->propertyContainer[$propertyName]);
	}

	/**
	 * @param $propertyName
	 *
	 * @return mixed|null
	 */
	public function getProperty($propertyName)
	{
		return $this->propertyContainer[$propertyName] ?? null;
	}

	/**
	 * @inheritdoc
	 */
	public function setProperty($propertyName, $value): void
	{
		if (!isset($this->propertyContainer[$propertyName])) {
			throw new RuntimeException("Property [{$propertyName}] not found");
		}

		$this->propertyContainer[$propertyName] = $value;
	}
}
