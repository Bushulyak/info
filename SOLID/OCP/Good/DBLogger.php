<?php

declare(strict_types=1);

namespace SOLID\OCP\Good;

/**
 * Class DBLogger
 *
 * @package SOLID\OCP\Good
 */
class DBLogger implements LoggerInterface
{
    /**
     * @inheritdoc
     */
    public function log(string $message): void
    {
        $this->logToDB($message);
    }

    /**
     * @param string $message
     */
    private function logToDB(string $message): void
    {
        // log data to database
    }
}
