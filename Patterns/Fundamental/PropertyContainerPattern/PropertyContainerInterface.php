<?php

declare(strict_types=1);

namespace Patterns\Fundamental\PropertyContainerPattern;

/**
 * Interface PropertyContainerInterface
 *
 * @package Patterns\Fundamental\PropertyContainerPattern
 */
interface PropertyContainerInterface
{
	/**
	 * @param $propertyName
	 * @param $value
	 */
	public function addProperty($propertyName, $value): void;

	/**
	 * @param $propertyName
	 */
	public function deleteProperty($propertyName): void;

	/**
	 * @param $propertyName
	 *
	 * @return mixed
	 */
	public function getProperty($propertyName);

	/**
	 * @param $propertyName
	 * @param $value
	 */
	public function setProperty($propertyName, $value): void;
}
