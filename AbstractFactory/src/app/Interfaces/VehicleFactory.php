<?php


namespace App\Interfaces;

use App\Interfaces\CarInterface;
use App\Interfaces\BikeInterface;
use App\Interfaces\PlaneInterface;
interface VehicleFactory
{
    public function createCar(): CarInterface;

    public function createBike(): BikeInterface;

    public function createPlane(): PlaneInterface;
}