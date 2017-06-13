<?php namespace Domain\Patterns\Behavioural\Strategy;

/**
 * Class SerializedArrayOutput
 * @package Domain\Patterns\Behavioural\Strategy
 */
class SerializedArrayOutput extends BaseOutput
{
  protected $data = [];

  /**
   * Sets data
   * @param array $data
   */
  public function set(array $data){
    $this->data = $data;
  }

  /**
   * Loads the data
   * @return string
   */
  public function load()
  {
      return serialize($this->data);
  }
}
