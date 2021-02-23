<?php

declare(strict_types=1);

namespace SOLID\ISP\Good;

/**
 * Class SuperTransformer
 *
 * @package SOLID\ISP\Good
 */
class SuperTransformer implements CarTransformerInterface, PlaneTransformerInterface, ShipTransformerInterface
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
