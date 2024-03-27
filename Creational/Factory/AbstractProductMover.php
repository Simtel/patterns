<?php

declare(strict_types=1);


namespace Factory;

abstract class AbstractProductMover
{

    abstract public function getTransport(): Transport;

    public function move(): void
    {
        $transport = $this->getTransport();

        $transport->setMaxSpeed(rand(50, 100));
        $transport->move();
    }
}