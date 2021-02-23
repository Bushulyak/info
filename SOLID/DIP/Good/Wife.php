<?php

declare(strict_types=1);

namespace SOLID\DIP\Good;

/**
 * Class Wife
 *
 * @package SOLID\DIP\Good
 */
class Wife implements FoodProviderInterface
{
    /**
     * @inheritdoc
     */
    public function getFood(): string
    {
        $food = ['apple', 'banana', 'orange'];

        return $food[\array_rand($food)];
    }
}
