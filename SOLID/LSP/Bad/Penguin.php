<?php

declare(strict_types=1);

namespace SOLID\LSP\Bad;

use \RuntimeException as RuntimeException;

/**
 * Class Penguin
 *
 * @package SOLID\LSP\Bad
 */
class Penguin extends Bird
{
    /**
     * @var int
     */
    private int $swimSpeed = 4;

    /**
     * @return int
     *
     * Данный метод нарушает принцип подстановки Барбары Лисков, поскольку меняется поведение родительского метода.
     *
     */
    public function fly(): int
    {
        throw new RuntimeException('I can\'t fly');
    }

    /**
     * @return int
     */
    public function swim(): int
    {
        return $this->swimSpeed;
    }
}
