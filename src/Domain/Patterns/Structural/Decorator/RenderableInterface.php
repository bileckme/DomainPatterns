<?php namespace Domain\Patterns\Structural\Decorator;

/**
 * Interface RenderableInterface
 * @package Domain\Patterns\Structural\Decorator
 */
interface RenderableInterface
{
  /**
   * Render the data
   * @return string
   */
  public function renderData();
}