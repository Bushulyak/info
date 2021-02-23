<?php

declare(strict_types=1);

namespace SOLID\OCP\Good;

/**
 * Class Product
 *
 * @package SOLID\OCP\Good
 */
class Product
{
	/**
	 * @var float
	 */
	private float $price;

	/**
	 * @var LoggerInterface
	 */
	private LoggerInterface $logger;

	/**
	 * Bird constructor.
	 *
	 * @param LoggerInterface $logger
	 */
	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	/**
	 * @param float $price
	 */
	public function setPrice(float $price): void
	{
		try {
			$this->price = $price;
		} catch (\Exception $exception) {
			$this->logger->log($exception->getMessage());
		}
	}

	/**
	 * @return float
	 */
	public function getPrice(): float
	{
		return $this->price;
	}
}
