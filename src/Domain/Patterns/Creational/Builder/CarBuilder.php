<?php namespace Domain\Patterns\Creational\Builder;

use Domain\Patterns\Creational\Builder\Parts\Engine;
use Domain\Patterns\Creational\Builder\Parts\Wheel;

/**
 * Class CarBuilder
 * @package Domain\Patterns\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheel1', new Wheel());
        $this->car->setPart('wheel2', new Wheel());
        $this->car->setPart('wheel3', new Wheel());
        $this->car->setPart('wheel4', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('carEngine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('door1', new Door());
        $this->car->setPart('door2', new Door());
        $this->car->setPart('door3', new Door());
        $this->car->setPart('door4', new Door());
    }

    public function getVehicle()
    {
        return $this->car;
    }
}