<?php

namespace App\Builder\Products;

class Pizza
{
    public $ingredients = [];

    public function listIngredients()
    {
        echo "Ingredients: " . implode(', ', $this->ingredients) . "\n\n";
    }
}