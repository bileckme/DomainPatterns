<?php namespace Domain\Patterns\Behavioural\State;

/**
 * Class StateOrder
 * @package Domain\Patterns\Behavioural\State
 */
abstract class StateOrder
{
    /**
   * @var array
   */
  private $details;

    protected static $state;

  /**
   * @return mixed
   */
  abstract protected function done();

  /**
   * @param string $status
   */
  protected function setStatus($status)
  {
      $this->details['status'] = $status;
      $this->details['updatedTime'] = time();
  }

  /**
   * @return string
   */
  protected function getStatus()
  {
      return $this->details['status'];
  }
}
