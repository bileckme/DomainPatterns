<?php namespace Domain\Patterns\Behavioural\Specification;

/**
 * Interface SpecificationInterface
 * @package Domain\Patterns\Behavioural\Specification
 */
interface SpecificationInterface
{

  /**
   * Satisfy the specification item
   * @param $item
   * @return boolean
   */
  public function isSatisfiedBy($item);

  /**
   * Plus the specification
   * @param $item
   * @return mixed
   */
  public function plus($spec);

  /**
   * Either the specification
   * @param $item
   * @return mixed
   */
  public function either($spec);

  /**
   * Not the specification
   * @param $item
   * @return mixed
   */
  public function not();

}