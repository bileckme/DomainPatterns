<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Class ItalianFactory
 * @package Domain\Patterns\Creational\FactoryMethod
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * @param string $type
     * @return VehicleInterface
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}