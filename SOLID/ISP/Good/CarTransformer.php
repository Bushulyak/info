<?php

declare(strict_types=1);

namespace SOLID\ISP\Good;

/**
 * Class CarTransformer
 *
 * @package SOLID\ISP\Good
 */
class CarTransformer implements CarTransformerInterface
{
    /**
     * @inheritdoc
     */
    public function toCar(): string
    {
        return __CLASS__ . ' transformed to car';
    }
}
