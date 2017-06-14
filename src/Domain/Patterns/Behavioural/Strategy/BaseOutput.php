<?php namespace Domain\Patterns\Behavioural\Strategy;

use Domain\Patterns\Behavioural\Strategy\OutputInterface as Output;

/**
 * Class BaseOutput
 * @package Domain\Patterns\Behavioural\Strategy
 */
abstract class BaseOutput implements Output
{
    /**
   * @var $data
   */
  protected $data = [];

  /**
   * @return mixed
   */
  public function load()
  {
      return $this->data;
  }
}
