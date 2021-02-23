<?php

declare(strict_types=1);

namespace SOLID\OCP\Good;

/**
 * Interface LoggerInterface
 *
 * @package SOLID\OCP\Good
 */
interface LoggerInterface
{
    /**
     * @param string $message
     */
    public function log(string $message): void;
}
