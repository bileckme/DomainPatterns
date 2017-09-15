<?php namespace Domain\Patterns\Structural\Flyweight;

/**
 * Interface FlyweightInterface
 * @package Domain\Patterns\Flyweight\Flyweight
 */
interface FlyweightInterface
{
    /**
     * @param string $extrinsicState
     * @return string
     */
    public function render($extrinsicState);
}