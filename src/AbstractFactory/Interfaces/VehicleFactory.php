<?php


namespace App\AbstractFactory\Interfaces;

interface VehicleFactory
{
    public function createCar(): CarInterface;

    public function createBike(): BikeInterface;

    public function createPlane(): PlaneInterface;
}