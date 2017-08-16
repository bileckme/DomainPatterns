<?php namespace Domain\Patterns\Tests\Creational\Prototype;

use Domain\Patterns\Creational\Prototype\BarBookPrototype;
use Domain\Patterns\Creational\Prototype\FooBookPrototype;
use PHPUnit_Framework_TestCase as Test;

/**
 * Class PrototypeTest
 * @package Domain\Patterns\Tests\Creational\Prototype
 */
class PrototypeTest extends Test
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}