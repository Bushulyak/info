<?php

declare(strict_types=1);

namespace SOLID\DIP\Bad;

/**
 * Class Wife
 *
 * @package SOLID\DIP\Bad
 */
class Wife
{
	/**
	 * @return string
	 */
	public function getFood(): string
	{
		$food = ['apple', 'banana', 'orange'];

		return $food[\array_rand($food)];
	}
}
