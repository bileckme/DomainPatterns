<?php namespace Domain\Patterns\Behavioural\State;

/**
 * Class ContextOrder
 * @package Domain\Patterns\Behavioural\State
 */
class ContextOrder extends StateOrder
{
  /**
   * @return StateOrder
   */
  public function getState()
  {
    return static::$state;
  }

  /**
   * @param StateOrder $state
   */
  public function setState(StateOrder $state)
  {
    static::$state = $state;
  }

  /**
   * @return mixed
   */
  public function done()
  {
    static::$state->done();
  }

  /**
   * @return string
   */
  public function getStatus()
  {
    return static::$state->getStatus();
  }
}