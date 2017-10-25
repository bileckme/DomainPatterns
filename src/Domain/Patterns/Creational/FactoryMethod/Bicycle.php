<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Class Bicycle
 * @package Domain\Patterns\Creational\FactoryMethod
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * @param string $rgb
     * @return void
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}