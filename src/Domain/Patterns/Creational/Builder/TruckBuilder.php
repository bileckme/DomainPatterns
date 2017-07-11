<?php namespace Domain\Patterns\Creational\Builder;

use Domain\Patterns\Creational\Builder\Parts\Truck;
use Domain\Patterns\Creational\Builder\Parts\Door;
use Domain\Patterns\Creational\Builder\Parts\Engine;
use Domain\Patterns\Creational\Builder\Parts\Wheel;

/**
 * Class TruckBuilder
 * @package Domain\Patterns\Creational\Builder
 */
class TruckBuilder implements BuilderInterface
{

    /**
     * @var Parts\Truck
     */
    private $truck;

    /**
     * Adds the doors
     */
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    /**
     * Adds the engine
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    /**
     * Adds the wheel
     */
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    /**
     * Creates the vehicle
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     * Gets the vehicle
     * @return Vehicle
     */
    public function getVehicle()
    {
        return $this->truck;
    }
}