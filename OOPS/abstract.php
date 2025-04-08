<?php
abstract class Vehical
{
    protected $brand;
    protected $speed;

    public function __construct($brand, $speed)
    {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    abstract public function move();
    public function getInfo()
    {
        return "Brand: {$this->brand}, Speed: {$this->speed} km/h";
    }
}

class Car extends Vehical
{
    public function move()
    {
        return "The car is moving at {$this->speed} km/h.";
    }
}
class Bike extends Vehical
{
    public function move()
    {
        return "The bike is moving at {$this->speed} km/h.";
    }
}

$car = new Car("Toyota", 120);
$bike = new Bike("Yamaha", 80);


echo $car->getInfo() . "\n"; // Brand: Toyota, Speed: 120 km/h
echo $car->move() . "\n"; // The car is moving at 120 km/h.

echo $bike->getInfo() . "\n"; // Brand: Yamaha, Speed: 80 km/h
echo $bike->move() . "\n"; // The bike is moving at 80 km/h.
