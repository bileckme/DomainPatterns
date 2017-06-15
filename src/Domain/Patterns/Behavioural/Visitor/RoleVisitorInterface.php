<?php namespace Domain\Patterns\Behavioural\Visitor;

/**
 * Note: the visitor must not choose itself which method to
 * invoke, it is the Visitee that makes this decision
 *
 * Interface RoleVisitorInterface
 * @package Domain\Patterns\Behavioural\Visitor
 */
interface RoleVisitorInterface
{
    /**
   *
   * @param User $role
   * @return mixed
   */
  public function visitUser(User $role);

  /**
   * @param Group $role
   * @return mixed
   */
  public function visitGroup(Group $role);
}
