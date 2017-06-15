<?php namespace Domain\Patterns\Behavioural\Specification;

/**
 * Class AbstractSpecification
 * @package Domain\Patterns\Behavioural\Specification
 */
abstract class AbstractSpecification implements SpecificationInterface
{
  /**
   * @var SpecificationInterface
   */
  private $specifications;

  /**
   * AbstractSpecification constructor.
   * @param SpecificationInterface[] ...$specifications
   */
  public function __construct(array $specifications)
  {
    $this->specifications = $specifications;
  }

  /**
   * Satisfy the specification item
   * @param $item
   * @return boolean
   */
  public function isSatisfiedBy($item)
  {
    foreach ($this->specifications as $specification) {
      if ($specification->isSatisfiedBy($item)) {
        return true;
      }
    }
    return false;
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