<?php
/**
 * Created by PhpStorm.
 * User: biyi
 * Date: 2017/06/15
 * Time: 8:37 AM
 */
namespace Domain\Patterns\Behavioural\State;

class CreateOrder extends StateOrder
{
    /**
   * CreateOrder constructor.
   */
  public function __construct()
  {
      $this->setStatus('created');
  }

  /**
   * @return mixed
   */
  protected function done()
  {
      static::$state = new ShippingOrder();
  }
}
