<?php

namespace App\AbstractFactory\FactoryClasses\Honda;

use App\AbstractFactory\Classes\Honda\HondaBike;
use App\AbstractFactory\Classes\Honda\HondaCar;
use App\AbstractFactory\Interfaces\BikeInterface;
use App\AbstractFactory\Interfaces\CarInterface;
use App\AbstractFactory\Interfaces\PlaneInterface;
use App\AbstractFactory\Interfaces\VehicleFactory;

class HondaFactory implements VehicleFactory
{
    public function createCar(): CarInterface
    {
        $args = func_get_args();
        return new HondaCar(...$args);
    }

    public function createBike(): BikeInterface
    {
        $args = func_get_args();
        return new HondaBike(...$args);
    }

    public function createPlane(): PlaneInterface
    {
    }
}