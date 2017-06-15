<?php namespace Domain\Patterns\Structural\Decorator;

/**
 * Class JsonRenderer
 * @package Domain\Patterns\Structural\Decorator
 */
class JsonRenderer extends RendererDecorator
{

  /**
   * Render the data
   * @return string
   */
  public function renderData()
  {
      return json_encode($this->wrapped->renderData());
  }
}
