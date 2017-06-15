<?php
/**
 * Created by PhpStorm.
 * User: biyi
 * Date: 2017/06/15
 * Time: 8:36 AM
 */
namespace Domain\Patterns\Behavioural\State;

class ShippingOrder extends StateOrder
{
    /**
   * ShippingOrder constructor.
   */
  public function __construct()
  {
      $this->setStatus('shipping');
  }

  /**
   * @return mixed
   */
  protected function done()
  {
      $this->setStatus('completed');
  }
}
