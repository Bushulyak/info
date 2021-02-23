<?php

declare(strict_types=1);

namespace SOLID\LSP\Bad;

/**
 * Class Duck
 *
 * @package SOLID\LSP\Bad
 */
class Duck extends Bird
{
    /**
     * @var int
     */
    private int $flySpeed = 8;

    /**
     * @var int
     */
    private int $swimSpeed = 2;

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
