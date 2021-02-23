<?php

declare(strict_types=1);

namespace SOLID\LSP\Bad;

/**
 * Class Bird
 *
 * @package SOLID\LSP\Bad
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
