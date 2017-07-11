<?php namespace Domain\Patterns\Tests\Creational\Builder;

use Domain\Patterns\Creational\Builder\Car;
use Domain\Patterns\Creational\Builder\Director;
use Domain\Patterns\Creational\Builder\Truck;
use Domain\Patterns\Creational\Builder\TruckBuilder;
use Domain\Patterns\Tests\Test;

class DirectorTest extends Test
{
    public function setUp()
    {
        
    }

    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }

    public function tearDown()
    {
        
    }
}