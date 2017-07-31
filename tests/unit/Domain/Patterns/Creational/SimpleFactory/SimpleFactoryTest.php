<?php namespace Domain\Patterns\Tests\Creational\SimpleFactory;

use Domain\Patterns\Creational\SimpleFactory\Bicycle;
use Domain\Patterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit_Framework_TestCase as Test;

/**
 * Class SimpleFactoryTest
 * @package Domain\Patterns\Tests\Creational\SimpleFactory
 */
class SimpleFactoryTest extends Test
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}