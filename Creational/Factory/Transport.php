<?php

declare(strict_types=1);


namespace Factory;

interface Transport
{
    public function setMaxSpeed(int $maxSpeed): void;

    public function move(): void;
}