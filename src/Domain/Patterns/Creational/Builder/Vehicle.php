<?php namespace Domain\Patterns\Creational\Builder;

/**
 * Class Vehicle
 * @package Domain\Patterns\Creational\Builder
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * Sets part
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}