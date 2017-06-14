<?php namespace Domain\Patterns\Behavioural\Memento;

/**
 * Class Originator
 * @package Domain\Patterns\Behavioural\Memento
 */
class Originator
{
  private $state;

  public function setMemento(Memento $state){
    $this->setState($state);
  }

  /**
   * @return mixed
   */
  public function createMemento($state)
  {
    return new Memento($state);
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