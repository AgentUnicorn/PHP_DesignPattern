<?php

namespace App\FactoryClasses\Honda;

use App\Classes\Honda\HondaBike;
use App\Classes\Honda\HondaCar;
use App\Interfaces\VehicleFactory;
use App\Interfaces\BikeInterface;
use App\Interfaces\CarInterface;
use App\Interfaces\PlaneInterface;

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