<?php namespace Domain\Patterns\Behavioural\NullObject;

use Domain\Patterns\Behavioural\NullObject\Object;
use ListVistor;

abstract class Lists
{
    /**
   * @var List $tail
   */
  protected $tail;

  /**
   * Gets the tail item in a list
   * @return List
   */
  public function getTail()
  {
      return $this->tail;
  }

  /**
   * Accepts a Visitor instance
   * @param ListVisitor $visitor
   * @param Object $param
   * @return Object
   */
  public function accept(ListVisitor $visitor, Object $param)
  {
      return $visitor->whenNullList($this, $param);
  }
}
