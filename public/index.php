<?php

declare(strict_types=1);

// Load vendor
require __DIR__ . '/../vendor/autoload.php';

// Load env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Singleton
use App\config\DatabaseConfig;
$host = DatabaseConfig::getValue('host');

// Abstract Factory
use App\AbstractFactory\FactoryClasses\Honda\HondaFactory;

$factory = new HondaFactory();
$bike = $factory->createBike('CBR650', 2023);
$car = $factory->createCar('NSX', 1997);

var_dump($bike->getFullName());
var_dump($car->getFullName());