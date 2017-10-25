<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Interface VehicleInterface
 * @package Domain\Patterns\Creational\FactoryMethod
 */
interface VehicleInterface
{
    /**
     * @param string $rgb
     * @return mixed
     */
    public function setColor($rgb);
}