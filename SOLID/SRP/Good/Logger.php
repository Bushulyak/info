<?php

declare(strict_types=1);

namespace SOLID\SRP\Good;

/**
 * Class Logger
 *
 * @package SOLID\SRP\Good
 */
class Logger
{
    /**
     * @param string $message
     */
    public function log(string $message): void
    {
        \file_put_contents(__DIR__ . '/app.log', $message . PHP_EOL, FILE_APPEND);
    }
}
