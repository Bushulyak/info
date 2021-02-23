<?php

declare(strict_types=1);

namespace SOLID\ISP\Bad;

/**
 * Class SuperTransformer
 *
 * @package SOLID\ISP\Bad
 */
class SuperTransformer implements SuperTransformerInterface
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
	 */
	public function toPlane(): string
	{
		return __CLASS__ . ' transformed to plane';
	}

	/**
	 * @inheritdoc
	 */
	public function toShip(): string
	{
		return __CLASS__ . ' transformed to ship';
	}
}
