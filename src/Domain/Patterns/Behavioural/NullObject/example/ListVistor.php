<?php namespace Domain\Patterns\Behavioural\NullObject;

/**
 * Interface ListVisitor
 * @package Domain\Patterns\Behavioural\NullObject
 */
interface ListVisitor {

  /**
   * @param NonNullList $host
   * @param Object $param
   * @return mixed
   */
  public function whenNonNullList(NonNullList $host, Object $param);

  /**
   * @param NullList $host
   * @param Object $param
   * @return mixed
   */
  public function whenNullList(NullList $host, Object $param);
}