<?php

declare(strict_types=1);


namespace Factory;

use Factory\AbstractProductMover;

class TruckProductMover extends AbstractProductMover
{

    #[\Override] public function getTransport(): Transport
    {
        return new Truck(60);
    }
}