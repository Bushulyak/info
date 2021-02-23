<?php

declare(strict_types=1);

namespace SOLID\SRP\Bad;

/**
 * Class Product
 *
 * @package SOLID\SRP\Bad
 */
class Product
{
	/**
	 * @var float
	 */
	private float $price;

	/**
	 * @param float $price
	 */
	public function setPrice(float $price): void
	{
		try {
			$this->price = $price;
		} catch (\Exception $exception) {
			$this->log($exception->getMessage());
		}
	}

	/**
	 * @return float
	 */
	public function getPrice(): float
	{
		return $this->price;
	}

	/**
	 * @param string $message
	 *
	 * Данный метод нарушает принцип единственной ответственности, поскольку класс Product одновременно отвечает за
	 * работу с ценой продукта и за логирование.
	 *
	 */
	private function log(string $message): void
	{
		\file_put_contents(__DIR__ . '/app.log', $message . PHP_EOL, FILE_APPEND);
	}
}
