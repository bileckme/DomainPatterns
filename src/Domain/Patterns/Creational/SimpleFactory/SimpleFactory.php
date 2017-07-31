<?php namespace Domain\Patterns\Creational\SimpleFactory;

/**
 * Class SimpleFactory
 * @package Domain\Patterns\Creational\SimpleFactory
 */
class SimpleFactory
{
    /**
     * @return Bicycle
     */
    public function createBicycle()
    {
        return new Bicycle();
    }
}