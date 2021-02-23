<?php

declare(strict_types=1);

namespace SOLID\SRP\Good;

/**
 * Class Product
 *
 * @package SOLID\SRP\Good
 */
class Product
{
    /**
     * @var float
     */
    private float $price;

    /**
     * @var Logger
     */
    private Logger $logger;

    /**
     * Bird constructor.
     *
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
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
