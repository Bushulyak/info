<?php

declare(strict_types=1);

namespace SOLID\OCP\Bad;

/**
 * Class Product
 *
 * @package SOLID\OCP\Bad
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
     *
     * Данный метод нарушает принцип открытости/закрытости, поскольку при необходимости логировать данные в базу
     * данных, вместо файла - придется носить изменения в класс Logger.
     *
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
