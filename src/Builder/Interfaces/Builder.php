<?php

namespace App\Builder\Interfaces;

interface Builder
{
    public function reset();

    public function addSauce();

    public function addVeggies();

    public function addFruit();

    public function addProtein();

    public function addCheese();

    public function bake();
}