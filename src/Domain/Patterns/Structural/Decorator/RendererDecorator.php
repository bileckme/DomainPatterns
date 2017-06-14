<?php namespace Domain\Patterns\Structural\Decorator;

/**
 * Class RendererDecorator
 * @package Domain\Patterns\Structural\Decorator
 */
abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    public function __construct(RenderableInterface $renderer)
    {
      $this->wrapped = $renderer;
    }
}