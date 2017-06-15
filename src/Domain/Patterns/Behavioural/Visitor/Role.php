<?php namespace Domain\Patterns\Behavioural\Visitor;

/**
 * Interface Role
 * @package Domain\Patterns\Behavioural\Visitor
 */
interface Role
{
    /**
   * @param RoleVisitorInterface $visitor
   * @return mixed
   */
  public function accept(RoleVisitorInterface $visitor);
}
