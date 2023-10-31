<?php

declare(strict_types=1);

// Load vendor
require __DIR__ . '/../vendor/autoload.php';

// Load env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Singleton
//use App\Singleton\Log;
//Log::push("Hello");
//Log::push("World");
//Log::print();

// Abstract Factory
//use App\AbstractFactory\FactoryClasses\Honda\HondaFactory;
//
//$factory = new HondaFactory();
//$bike = $factory->createBike('CBR650', 2023);
//$car = $factory->createCar('NSX', 1997);
//
//var_dump($bike->getFullName());
//var_dump($car->getFullName());

// Builder
//use App\Builder\Director;
//use App\Builder\Concrete\ConcretePizza;
//
//$director = new Director();
//$builder = new ConcretePizza();
//$director->setBuilder($builder);
//$director->makeMargherita();
//$builder->bake()->listIngredients();
