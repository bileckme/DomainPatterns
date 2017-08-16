<?php namespace Domain\Patterns\Creational\Prototype;

/**
 * Class BarBookPrototype
 * @package Domain\Patterns\Creational\Prototype
 */
class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    /**
     *
     */
    public function __clone()
    {

    }
}