<?php

declare(strict_types=1);

namespace Crutch\RealClock;

use DateTimeImmutable;
use DateTimeZone;
use Psr\Clock\ClockInterface;

final class RealClock implements ClockInterface
{
    private DateTimeZone $timezone;

    public function __construct(?DateTimeZone $timezone = null)
    {
        $this->timezone = $timezone ?? new DateTimeZone('UTC');
    }

    /**
     * @inheritDoc
     */
    public function now(): DateTimeImmutable
    {
        return (new DateTimeImmutable())->setTimezone($timezone ?? $this->timezone);
    }
}
