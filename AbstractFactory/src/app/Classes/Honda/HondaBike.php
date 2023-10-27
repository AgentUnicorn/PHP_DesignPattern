<?php

namespace App\Classes\Honda;

use App\Interfaces\BikeInterface;

class HondaBike implements BikeInterface
{
    protected string $branch;
    protected string $model;
    protected int $year;
    protected string $color;

    public function __construct(
        string $model,
        int $year
    )
    {
        $this->branch = 'Honda';
        $this->model = $model;
        $this->year = $year;
        $this->color = 'red';
    }

    public function paint(string $color) {
        $this->color = $color;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getFullName(): string
    {
        return "{$this->branch} {$this->model} ($this->year)";
    }
}