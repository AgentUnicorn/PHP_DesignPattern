<?php

namespace App\Builder\Concrete;

use App\Builder\Interfaces\Builder;
use App\Builder\Products\Pizza;

class ConcreteMargherita implements Builder
{
    private $pizza;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        // TODO: Implement reset() method.
        $this->pizza = new Pizza();
    }

    public function addSauce() {
        $this->pizza->ingredients[] = 'Tomato';
    }

    public function addVeggies() {
        $this->pizza->ingredients[] = 'Basil';
    }

    public function addCheese() {
        $this->pizza->ingredients[] = 'Mozzarella';
    }

    public function addFruit() {
        // TODO: Implement addFruit() method.
    }

    public function addProtein()
    {
        // TODO: Implement addProtein() method.
    }

    public function bake()
    {
        // TODO: Implement bake() method.
        $pizza = $this->pizza;
        $this->reset();
        return $pizza;
    }
}