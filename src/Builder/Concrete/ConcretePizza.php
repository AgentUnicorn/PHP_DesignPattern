<?php

namespace App\Builder\Concrete;

use App\Builder\Interfaces\Builder;
use App\Builder\Products\Pizza;

class ConcretePizza implements Builder
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

    public function addSauce(string $sauce = ''): void {
        if (!empty($sauce)) {
            $this->pizza->ingredients[] = $sauce;
        }
    }

    public function addVeggies(string $veggies = ''): void {
        if (!empty($veggies)) {
            $this->pizza->ingredients[] = $veggies;
        }
    }

    public function addCheese(string $cheese = ''): void {
        if (!empty($cheese)) {
            $this->pizza->ingredients[] = $cheese;
        }
    }

    public function addFruit(string $fruit = ''): void {
        // TODO: Implement addFruit() method.
    }

    public function addProtein(string $protein = ''): void
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