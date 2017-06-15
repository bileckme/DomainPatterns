<?php namespace Domain\Patterns\Behavioural\Visitor;

/**
 * Class Group
 * @package Domain\Patterns\Behavioural\Visitor
 */
class Group implements Role
{
  /**
   * @var string
   */
  private $name;

  /**
   * Group constructor.
   * @param string $name
   */
  public function __construct(string $name)
  {
    $this->name = $name;
  }

  /**
   * Get the Group name
   * @return string
   */
  public function getName()
  {
    return sprintf('Group: %s', $this->name);
  }

  /**
   * @param RoleVisitorInterface $visitor
   * @return mixed
   */
  public function accept(RoleVisitorInterface $visitor)
  {
    $visitor->visitGroup($this);
  }
}