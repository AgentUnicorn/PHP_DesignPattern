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
        $this->builder->addSauce();
        $this->builder->addVeggies();
        $this->builder->addProtein();
        $this->builder->addFruit();
        $this->builder->addCheese();
    }
}