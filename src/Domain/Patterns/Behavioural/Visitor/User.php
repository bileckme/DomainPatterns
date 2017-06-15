<?php namespace Domain\Patterns\Behavioural\Visitor;

/**
 * Class User
 * @package Domain\Patterns\Behavioural\Visitor
 */
class User implements Role
{
  /**
   * @var string
   */
  private $name;

  /**
   * User constructor.
   * @param string $name
   */
  public function __construct($name)
  {
    $this->name = $name;
  }

  /**
   * Get the User name
   * @return string
   */
  public function getName()
  {
    return sprintf('User %s', $this->name);
  }

  /**
   * @param RoleVisitorInterface $visitor
   * @return mixed
   */
  public function accept(RoleVisitorInterface $visitor)
  {
    $visitor->visitUser($this);
  }
}