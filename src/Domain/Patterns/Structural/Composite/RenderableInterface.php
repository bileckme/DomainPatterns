<?php namespace Domain\Patterns\Structural\Composite;

/**
 * Interface RenderableInterface
 * @package Domain\Patterns\Structural\Composite
 */
interface RenderableInterface
{
    /**
     * @return string
     */
    public function render();
}