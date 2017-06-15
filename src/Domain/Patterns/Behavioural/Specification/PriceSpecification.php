<?php namespace Domain\Patterns\Behavioural\Specification;

/**
 * Class PriceSpecification
 * @package Domain\Patterns\Behavioural\Specification
 */
class PriceSpecification implements SpecificationInterface
{
    /**
   * @var array
   */
  private $specification;
  /**
   * @var float
   */
  private $minPrice;
  /**
   * @var float
   */
  private $maxPrice;

  /**
   * PriceSpecification constructor.
   * @param float $minPrice
   * @param float $maxPrice
   */
  public function __construct($minPrice, $maxPrice)
  {
      $this->minPrice = $minPrice;
      $this->maxPrice = $maxPrice;
  }

  /**
   * Satisfy the specification item
   * @param $item
   * @return boolean
   */
  public function isSatisfiedBy($item)
  {
      if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
          return false;
      }

      if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
          return false;
      }

      return true;
  }

  /**
   * Plus the specification
   * @param $item
   * @return mixed
   */
  public function plus($spec)
  {
      // TODO: Implement plus() method.
  }

  /**
   * Either the specification
   * @param $item
   * @return mixed
   */
  public function either($spec)
  {
      // TODO: Implement either() method.
  }

  /**
   * Not the specification
   * @param $item
   * @return mixed
   */
  public function not()
  {
      // TODO: Implement not() method.
  }
}
