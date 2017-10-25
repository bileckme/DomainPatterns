<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Class FactoryMethod
 * @package Domain\Patterns\Creational\FactoryMethod
 */
abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    /**
     * @param string $type
     * @return VehicleInterface
     */
    abstract protected function createVehicle($type);

    /**
     * @param string $type
     * @return VehicleInterface
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}