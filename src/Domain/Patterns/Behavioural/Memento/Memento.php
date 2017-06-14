<?php namespace Domain\Patterns\Behavioural\Memento;

/**
 * Class Memento
 * @package Domain\Patterns\Behavioural\Memento
 */
class Memento
{
  private $state;

  public function __construct($state)
  {
    $this->setState($state);
  }

  /**
   * @return mixed
   */
  public function getState()
  {
    return $this->state;
  }

  /**
   * @param mixed $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }

}