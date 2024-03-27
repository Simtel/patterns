<?php

declare(strict_types=1);

require_once __DIR__.'/../../vendor/autoload.php';

use Factory\CarProductMover;
use Factory\TruckProductMover;


echo 'Test car mover'.PHP_EOL;
$car = new CarProductMover();
$car->move();

echo 'Test truck mover'.PHP_EOL;
$car = new TruckProductMover();
$car->move();