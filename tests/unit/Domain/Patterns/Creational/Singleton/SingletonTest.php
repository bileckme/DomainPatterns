<?php namespace Domain\Patterns\Tests\Creational\Singleton;

use Domain\Patterns\Creational\Singleton\Singleton;
use PHPUnit_Framework_TestCase as Test;
/**
 * Class SingletonTest
 * @package Domain\Patterns\Tests\Creational\Singleton
 */
class SingletonTest extends Test
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}