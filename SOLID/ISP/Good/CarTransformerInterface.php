<?php

declare(strict_types=1);

namespace SOLID\ISP\Good;

/**
 * Interface CarTransformerInterface
 *
 * @package SOLID\ISP\Good
 */
interface CarTransformerInterface
{
    /**
     * @return string
     */
    public function toCar(): string;
}
