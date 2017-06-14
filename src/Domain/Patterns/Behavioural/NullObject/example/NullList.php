<?php namespace Domain\Patterns\Behavioural\NullObject;

/**
 * Class NullList
 * @package Domain\Patterns\Behavioural\NullObject
 */
class NullList extends Lists
{
    /**
   * @var NullList $instance
   */
  private static $instance = null;

  /**
   *
   * @return NullList
   */
  public static function singleton()
  {
      return self::$instance;
  }

  /**
   * Gets the tail item in a list
   * @return List
   */
  public function getTail()
  {
      return NullList::class;
  }

  /**
   * @param ListVisitor $visitor
   * @param Object $param
   * @return Object
   */
  public function accept(ListVisitor $visitor, Object $param)
  {
      return $visitor->whenNullList(NullList::class, $param);
  }
}
