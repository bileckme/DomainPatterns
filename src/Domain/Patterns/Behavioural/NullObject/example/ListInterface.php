<?php namespace Domain\Patterns\Behavioural\NullObject;

/**
 * Interface ListInterface
 * @package Domain\Patterns\Behavioural\NullObject
 */
interface ListInterface
{
    /**
   * @param NonNullList $host
   * @param Object $param
   * @return Object
   */
  public function whenNonNullList(NonNullList $host, Object $param);

  /**
   * @param NullList $host
   * @param Object $param
   * @return mixed
   */
  public function whenNullList(NullList $host, Object $param);
}
