<?php

declare(strict_types=1);

namespace SOLID\OCP\Good;

/**
 * Class FileLogger
 *
 * @package SOLID\OCP\Good
 */
class FileLogger implements LoggerInterface
{
    /**
     * @inheritdoc
     */
    public function log(string $message): void
    {
        $this->logToFile($message);
    }

    /**
     * @param string $message
     */
    private function logToFile(string $message): void
    {
        \file_put_contents(__DIR__ . '/app.log', $message . PHP_EOL, FILE_APPEND);
    }
}
