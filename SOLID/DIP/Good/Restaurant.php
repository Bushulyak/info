<?php

declare(strict_types=1);

namespace SOLID\DIP\Good;

/**
 * Class Restaurant
 *
 * @package SOLID\DIP\Good
 */
class Restaurant implements FoodProviderInterface
{
	/**
	 * @inheritdoc
	 */
	public function getFood(): string
	{
		$food = ['starter', 'seafood', 'dessert'];

		return $food[\array_rand($food)];
	}
}
