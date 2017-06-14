<?php namespace Domain\Patterns\Behavioural\Observer;

class ConcreteSubject extends Subject
{

  /**
   * Attach the observer
   * @param Observer $observer
   * @return mixed
   */
  public function attach(Observer $observer)
  {
      array_push($this->observerSet, $observer);
  }

  /**
   * Detach the observer
   * @param Observer $observer
   * @return mixed
   */
  public function detach(Observer $observer)
  {
      $this->observerSet = [];
  }

  /**
   * Get the object state
   * @return array
   */
  public function getState()
  {
      return parent::getDataSet();
  }

  /**
   * Set the object state
   * @param $state
   */
  public function setState($state)
  {
      parent::setDataSet($state);
  }
}
