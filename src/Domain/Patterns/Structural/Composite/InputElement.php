<?php namespace Domain\Patterns\Structural\Composite;

/**
 * Class InputElement
 * @package Domain\Patterns\Structural\Composite
 */
class InputElement implements RenderableInterface
{

    /**
     * @return string
     */
    public function render()
    {
        return '<input type="text" />';
    }
}