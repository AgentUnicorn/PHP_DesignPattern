<?php

namespace App\Builder;

use App\Builder\Interfaces\Builder;

class Director
{
    private $builder;

    public function setBuilder(Builder $builder) {
        $this->builder = $builder;
    }
    public function makeMargherita()
    {
        $this->builder->addSauce('Tomato');
        $this->builder->addVeggies('Basil');
        $this->builder->addCheese('Mozzarella');
    }
}