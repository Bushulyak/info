<?php

declare(strict_types=1);

namespace SOLID\LSP\Good;

/**
 * Class BirdRun
 *
 * @package SOLID\LSP\Good
 */
class BirdRun
{
    /**
     * @var Bird
     */
    private Bird $bird;

    /**
     * BirdRun constructor.
     *
     * @param Bird $bird
     */
    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    /**
     * @return float
     */
    public function getRunSpeed(): float
    {
        $flySpeed = $this->bird->fly();

        return $flySpeed / 100 * 10;
    }
}
