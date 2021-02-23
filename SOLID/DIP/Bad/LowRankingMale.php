<?php

declare(strict_types=1);

namespace SOLID\DIP\Bad;

/**
 * Class LowRankingMale
 *
 * @package SOLID\DIP\Bad
 */
class LowRankingMale
{
	/**
	 * Данный метод нарушает принцип инверсии зависимостей, поскольку метод сильно зависим от класса SOLID\DIP\Bad\Wife
	 */
	public function eat(): void
	{
		$wife = new Wife();
		$food = $wife->getFood();

		unset($food);
	}
}
