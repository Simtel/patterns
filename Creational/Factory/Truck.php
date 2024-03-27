<?php

declare(strict_types=1);


namespace Factory;

class Truck implements Transport
{
    public function __construct(
        private int $maxSpeed = 0,
    ) {
    }

    #[\Override] public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;

        echo sprintf('Set max speed %d for %s', $maxSpeed, __CLASS__) . PHP_EOL;
    }

    #[\Override] public function move(): void
    {
        echo 'Move only trucks road.' . PHP_EOL;
        echo sprintf('Product moved with %d speed', $this->maxSpeed) . PHP_EOL;
    }
}