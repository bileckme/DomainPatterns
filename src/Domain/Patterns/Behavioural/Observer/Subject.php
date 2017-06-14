<?php namespace Domain\Patterns\Behavioural\Observer;

/**
 * Class Subject
 * @package Domain\Patterns\Behavioural\Observer
 */
abstract class Subject
{
    /**
   * @var array
   */
  protected $observerSet = [];

  /**
   * @var array
   */
  protected $dataSet = [];

  /**
   * Attach the observer
   * @param Observer $observer
   * @return mixed
   */
  abstract public function attach(Observer $observer);

  /**
   * Detach the observer
   * @param Observer $observer
   * @return mixed
   */
  abstract public function detach(Observer $observer);

    public function notify()
    {
        foreach ($this->observerSet as $state) {
            $state->update($this);
        }
    }

  /**
   * Get the data set
   * @return array
   */
  public function getDataSet()
  {
      return $this->dataSet;
  }

  /**
   * Set the data set
   * @param array $dataSet
   */
  public function setDataSet(array $dataSet)
  {
      $this->dataSet = $dataSet;
  }
}
