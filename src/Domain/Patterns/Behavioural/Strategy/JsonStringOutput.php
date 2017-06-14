<?php namespace Domain\Patterns\Behavioural\Strategy;

/**
 * Class JsonStringOutput
 * @package Domain\Patterns\Behavioural\Strategy
 */
class JsonStringOutput extends BaseOutput
{
    /**
   * @var array $data
   */
  protected $data = [];

  /**
   * Sets data
   * @param array $data
   */
  public function set(array $data)
  {
      $this->data = $data;
  }

  /**
   * Loads the data
   * @return string
   */
  public function load()
  {
      return json_encode($this->data);
  }
}
