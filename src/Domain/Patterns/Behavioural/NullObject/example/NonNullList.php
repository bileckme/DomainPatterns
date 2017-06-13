<?php namespace Domain\Patterns\Behavioural\NullObject;

use Domain\Patterns\Behavioural\NullObject\Object;
use Domain\Patterns\Behavioural\NullObject\Lists;

/**
 * Class NonNullList
 * @package Domain\Patterns\Behavioural\NullObject
 */class NonNullList extends Lists
{
  /**
   * @var $head
   */
  private $head;

  /**
   * @var $tail
   */
  private $tail;

  /**
   * NonNullList constructor.
   * @param Object $head
   * @param Lists $tail
   */
  public function __construct(Object $head, Lists $tail)
  {
    $this->head = $head;
    $this->tail = $tail;
  }

  /**
   * for convenience we could add a constructor taking only the head to make 1 element lists.
   *
   * @internal mixed
   * @return mixed
   */
  public function getHead() {
    return $this->head;
  }

  /**
   * for convenience we could add a constructor taking only the head to make 1 element lists.
   *
   * @return List
   */
  public function getTail() {
    return $this->tail;
  }

  /**
   * @param ListVisitor $visitor
   * @param Object $param
   * @return mixed
   */
  public function accept(ListVisitor $visitor, Object $param) {
    return $visitor->whenNonNullList($this, $param);
  }
}