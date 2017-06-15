<?php namespace Domain\Patterns\Behavioural\Specification;

/**
 * Class Item
 * @package Domain\Patterns\Behavioural\Specification
 */
class Item
{
  /**
   * @var float
   */
  private $price;

  /**
   * Item constructor.
   * @param float $price
   */
  public function __construct($price)
  {
    $this->price = $price;
  }

  /**
   * @return float
   */
  public function getPrice()
  {
    return $this->price;
  }
}