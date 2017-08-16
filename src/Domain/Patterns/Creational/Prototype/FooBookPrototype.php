<?php namespace Domain\Patterns\Creational\Prototype;

/**
 * Class FooBookPrototype
 * @package Domain\Patterns\Creational\Prototype
 */
class FooBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Foo';

    /**
     *
     */
    public function __clone()
    {

    }
}