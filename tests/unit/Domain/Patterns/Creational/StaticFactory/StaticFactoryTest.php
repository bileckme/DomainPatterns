<?php namespace Domain\Patterns\Tests\Creational\StaticFactory;

use Domain\Patterns\Creational\StaticFactory\FormatNumber;
use Domain\Patterns\Creational\StaticFactory\FormatString;
use Domain\Patterns\Creational\StaticFactory\StaticFactory;
use PHPUnit_Framework_TestCase as Test;

/**
 * Class StaticFactoryTest
 * @package Domain\Patterns\Tests\Creational\StaticFactory
 */
class StaticFactoryTest extends Test
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
          FormatNumber::class,
          StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
          FormatString::class,
          StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}