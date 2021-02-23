<?php

declare(strict_types=1);

namespace SOLID\DIP\Good;

/**
 * Interface FoodProviderInterface
 *
 * @package SOLID\DIP\Good
 */
interface FoodProviderInterface
{
    /**
     * @return string
     */
    public function getFood(): string;
}
