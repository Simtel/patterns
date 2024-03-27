<?php

declare(strict_types=1);


namespace Factory;

class CarProductMover extends AbstractProductMover
{
    #[\Override] public function getTransport(): Transport
    {
        return new Car(150);
    }

}