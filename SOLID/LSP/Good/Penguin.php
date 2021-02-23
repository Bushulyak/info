<?php

declare(strict_types=1);

namespace SOLID\LSP\Good;

/**
 * Class Penguin
 *
 * @package SOLID\LSP\Good
 */
class Penguin extends Bird
{
    /**
     * @var int
     */
    private int $flySpeed = 0;

    /**
     * @var int
     */
    private int $swimSpeed = 4;

    /**
     * @return int
     */
    public function fly(): int
    {
        return $this->flySpeed;
    }

    /**
     * @return int
     */
    public function swim(): int
    {
        return $this->swimSpeed;
    }
}
