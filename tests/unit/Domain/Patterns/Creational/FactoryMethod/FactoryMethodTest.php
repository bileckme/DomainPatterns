<?php namespace Domain\Patterns\Tests\Creational\FactoryMethod;

use Domain\Patterns\Creational\FactoryMethod\Bicycle;
use Domain\Patterns\Creational\FactoryMethod\CarFerrari;
use Domain\Patterns\Creational\FactoryMethod\CarMercedes;
use Domain\Patterns\Creational\FactoryMethod\FactoryMethod;
use Domain\Patterns\Creational\FactoryMethod\GermanFactory;
use Domain\Patterns\Creational\FactoryMethod\ItalianFactory;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class FactoryMethodTest
 * @package Domain\Patterns\Tests\Creational\FactoryMethod
 */
class FactoryMethodTest extends TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class, $result);
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType()
    {
        (new ItalianFactory())->create('spaceship');
    }
}