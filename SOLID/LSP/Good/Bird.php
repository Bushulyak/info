<?php

declare(strict_types=1);

namespace SOLID\LSP\Good;

/**
 * Class Bird
 *
 * @package SOLID\LSP\Good
 */
class Bird
{
    /**
     * @var int
     */
    private int $flySpeed = 10;

    /**
     * @return int
     */
    public function fly(): int
    {
        return $this->flySpeed;
    }
}
