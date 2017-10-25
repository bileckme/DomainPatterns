<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Class CarFerrari
 * @package Domain\Patterns\Creational\FactoryMethod
 */
class CarFerrari implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * @param $rgb
     * @return void
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}