<?php

declare(strict_types=1);

namespace SOLID\ISP\Good;

/**
 * Interface ShipTransformerInterface
 *
 * @package SOLID\ISP\Good
 */
interface ShipTransformerInterface
{
    /**
     * @return string
     */
    public function toShip(): string;
}
