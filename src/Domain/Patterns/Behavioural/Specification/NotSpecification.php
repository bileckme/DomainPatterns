<?php namespace Domain\Patterns\Behavioural\Specification;

/**
 * Class NotSpecification
 * @package Domain\Patterns\Behavioural\Specification
 */
class NotSpecification implements SpecificationInterface
{
  /**
   * @var array
   */
  private $specification;

  /**
   * OrSpecification constructor.
   * @param SpecificationInterface[] ...$specifications
   */
  public function __construct(SpecificationInterface $specification)
  {
    $this->specification = $specification;
  }

  /**
   * Satisfy the specification item
   * @param $item
   * @return boolean
   */
  public function isSatisfiedBy($item)
  {
    return !$this->specification->isSatisfiedBy($item);
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