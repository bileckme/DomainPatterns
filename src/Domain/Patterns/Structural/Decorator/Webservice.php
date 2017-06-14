<?php namespace Domain\Patterns\Structural\Decorator;

/**
 * Class Webservice
 * @package Domain\Patterns\Structural\Decorator
 */
class Webservice implements RenderableInterface
{
  /**
   * @var string
   */
  private $data;

  /**
   * Webservice constructor.
   * @param string $data
   */
  public function __construct($data)
  {
    $this->data = $data;
  }

  /**
   * Render the data
   * @return string
   */
  public function renderData()
  {
    return $this->data;
  }
}