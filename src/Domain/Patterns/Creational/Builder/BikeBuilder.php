<?php namespace Domain\Patterns\Creational\Builder;

use Domain\Patterns\Creational\Builder\Parts\Engine;
use Domain\Patterns\Creational\Builder\Parts\Wheel;
use Dropbox\Exception;

class BikeBuilder implements BuilderInterface
{
    private $bike;

    /**
     * Creates the vehicle
     */
    public function createVehicle()
    {
        $this->bike = new Bike();
    }

    /**
     * Adds the wheel
     */
    public function addWheel()
    {
        $this->bike->setPart('wheel1', new Wheel());
        $this->bike->setPart('wheel2', new Wheel());
    }

    /**
     * Adds the engine
     */
    public function addEngine()
    {
        $this->bike->setPart('bikeEngine', new Engine());
    }

    /**
     * Adds the door
     * @throws Exception
     */
    public function addDoors()
    {
        throw new Exception('Bike has no door!');
    }

    /**
     * Gets the vehicle
     * @return Vehicle
     */
    public function getVehicle()
    {
        return $this->bike;
    }
}