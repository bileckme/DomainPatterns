<?php namespace Domain\Patterns\Creational\FactoryMethod;

/**
 * Class CarMercedes
 * @package Domain\Patterns\Creational\FactoryMethod
 */
class CarMercedes implements VehicleInterface
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

    /**
     *
     */
    public function addAMGTuning()
    {
        // do additional tuning here
    }
}