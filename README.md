# crutch/clock-real

Real Clock implementation

# Install

```bash
composer require crutch/clock-real
```

# Usage

```php
<?php

$clock1 = new \Crutch\RealClock\RealClock();

$time1 = $clock1->now();
var_dump($time1->getTimezone()->getName()); // "UTC"

// Default timezone
$clock2 = new \Crutch\RealClock\RealClock(new DateTimeZone('Pacific/Tarawa'));

$time2 = $clock2->now();
var_dump($time2->getTimezone()->getName()); // "Pacific/Tarawa"

```
