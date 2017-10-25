<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Class GermanFactory
 * @package Domain\Patterns\Creational\FactoryMethod
 */
class GermanFactory extends FactoryMethod
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
                $carMercedes = new CarMercedes();
                // we can specialize the way we want some concrete Vehicle since we know the class
                $carMercedes->addAMGTuning();

                return $carMercedes;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}