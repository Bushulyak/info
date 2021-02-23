<?php

declare(strict_types=1);

namespace SOLID\DIP\Good;

/**
 * Class HighRankingMale
 *
 * @package SOLID\DIP\Good
 */
class HighRankingMale
{
	/**
	 * @var FoodProviderInterface
	 */
	private FoodProviderInterface $foodProvider;

	/**
	 * HighRankingMale constructor.
	 *
	 * @param FoodProviderInterface $foodProvider
	 */
	public function __construct(FoodProviderInterface $foodProvider)
	{
		$this->foodProvider = $foodProvider;
	}

	/**
	 * Зависимость не от конкретного класса, а от абстракции
	 */
	public function eat(): void
	{
		$food = $this->foodProvider->getFood();

		unset($food);
	}
}
