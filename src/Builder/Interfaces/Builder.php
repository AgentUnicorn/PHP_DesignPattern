<?php

namespace App\Builder\Interfaces;

interface Builder
{
    public function reset();

    public function addSauce(string $sauce = ''): void;

    public function addVeggies(string $veggies = ''): void;

    public function addFruit(string $fruit = ''): void;

    public function addProtein(string $protein = ''): void;

    public function addCheese(string $cheese = ''): void;

    public function bake();
}