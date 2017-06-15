<?php namespace Domain\Patterns\Behavioural\Visitor;

/**
 * Class RoleVisitor
 * @package Domain\Patterns\Behavioural\Visitor
 */
class RoleVisitor implements RoleVisitorInterface
{
    /**
   * @var Role[]
   */
  private $visited = [];

  /**
   * @param Group $role
   */
  public function visitGroup(Group $role)
  {
      $this->visited[] = $role;
  }

  /**
   * @param User $role
   */
  public function visitUser(User $role)
  {
      $this->visited[] = $role;
  }

  /**
   * @return Role[]
   */
  public function getVisited()
  {
      return $this->visited;
  }
}
