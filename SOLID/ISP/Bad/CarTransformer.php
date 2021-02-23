<?php

declare(strict_types=1);

namespace SOLID\ISP\Bad;

use \RuntimeException as RuntimeException;

/**
 * Class CarTransformer
 *
 * @package SOLID\ISP\Bad
 */
class CarTransformer implements SuperTransformerInterface
{
	/**
	 * @inheritdoc
	 */
	public function toCar(): string
	{
		return __CLASS__ . ' transformed to car';
	}

	/**
	 * @inheritdoc
	 *
	 * Вынуждены реализовывать ненужный метод по причине «толстого» интерфейса ISP\Bad\SuperTransformerInterface
	 *
	 */
	public function toPlane(): string
	{
		throw new RuntimeException(__CLASS__ . ' can\'t transform to plane');
	}

	/**
	 * @inheritdoc
	 *
	 * Вынуждены реализовывать ненужный метод по причине «толстого» интерфейса ISP\Bad\SuperTransformerInterface
	 *
	 */
	public function toShip(): string
	{
		throw new RuntimeException(__CLASS__ . ' can\'t transform to ship');
	}
}
