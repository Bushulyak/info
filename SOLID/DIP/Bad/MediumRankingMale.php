<?php

declare(strict_types=1);

namespace SOLID\DIP\Bad;

/**
 * Class LowRankingMale
 *
 * @package SOLID\DIP\Bad
 */
class MediumRankingMale
{
	/**
	 * @var Wife
	 */
	private Wife $wife;

	/**
	 * HighRankingMale constructor.
	 *
	 * @param Wife $wife
	 */
	public function __construct(Wife $wife)
	{
		$this->wife = $wife;
	}

	/**
	 * Немного лучше, но зависимость от класса SOLID\DIP\Bad\Wife все равно остается
	 */
	public function eat(): void
	{
		$food = $this->wife->getFood();

		unset($food);
	}
}
