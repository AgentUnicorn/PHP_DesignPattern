<?php

require __DIR__ . '/../vendor/autoload.php';

use App\FactoryClasses\Honda\HondaFactory;

$factory = new HondaFactory();
$bike = $factory->createBike('CBR650', 2023);
$car = $factory->createCar('NSX', 1997);

var_dump($bike->getFullName());
var_dump($car->getFullName());