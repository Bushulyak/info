<?php

declare(strict_types=1);

namespace SOLID\OCP\Bad;

/**
 * Class Logger
 *
 * @package SOLID\OCP\Bad
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
