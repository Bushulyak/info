<?php

declare(strict_types=1);

namespace SOLID\ISP\Good;

/**
 * Interface PlaneTransformerInterface
 *
 * @package SOLID\ISP\Good
 */
interface PlaneTransformerInterface
{
    /**
     * @return string
     */
    public function toPlane(): string;
}
