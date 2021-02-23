<?php

declare(strict_types=1);

namespace SOLID\ISP\Bad;

/**
 * Interface SuperTransformerInterface
 *
 * @package SOLID\ISP\Bad
 */
interface SuperTransformerInterface
{
    /**
     * @return string
     */
    public function toCar(): string;

    /**
     * @return string
     */
    public function toPlane(): string;

    /**
     * @return string
     */
    public function toShip(): string;
}
