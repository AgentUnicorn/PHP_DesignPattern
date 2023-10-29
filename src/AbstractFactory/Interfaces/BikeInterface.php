<?php

namespace App\AbstractFactory\Interfaces;

interface BikeInterface
{
    public function paint(string $color);

    public function getModel(): string;

    public function getYear(): int;

    public function getFullName(): string;
}