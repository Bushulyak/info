<?php

declare(strict_types=1);

namespace Patterns\Fundamental\EventChannelPattern;

/**
 * Interface SubscriberInterface
 *
 * @package Patterns\Fundamental\EventChannelPattern
 */
interface SubscriberInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $message
     */
    public function notify(string $message): void;
}
