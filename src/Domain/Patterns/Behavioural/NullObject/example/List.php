<?php namespace Domain\Patterns\Behavioural\NullObject;

use stdClass as Object;
use ListVistor;

abstract class List
{
  /**
   * Gets the tail item in a list
   * @return List
   */
  public function getTail(){
    return $tail;
  }

  /**
   * Gets the tail item in a list
   * @param ListVisitor
   * @param Object
   * @return Object
   */
  public function accept(ListVisitor $visitor, Object $param){

  }

}