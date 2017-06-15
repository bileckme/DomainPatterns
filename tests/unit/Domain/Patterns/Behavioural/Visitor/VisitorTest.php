<?php namespace Domain\Patterns\Tests\Behavioural\Visitor;

use Domain\Patterns\Behavioural\Visitor\Group;
use Domain\Patterns\Behavioural\Visitor\Role;
use Domain\Patterns\Behavioural\Visitor\RoleVisitor;
use Domain\Patterns\Behavioural\Visitor\User;
use Domain\Patterns\Tests\Test;

/**
 * Class VisitorTest
 * @package Domain\Patterns\Tests\Behavioural\Visitor
 */
class VisitorTest extends Test
{
    /**
   * @var RoleVisitor
   */
  private $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

  /**
   * @return array
   */
  public function provideRoles()
  {
      return [
      [new User('Biyi')],
      [new Group('Administrators')],
    ];
  }

  /**
   * @dataProvider provideRoles
   *
   * @param Role $role
   */
  public function testVisitSomeRole(Role $role)
  {
      $role->accept($this->visitor);
      $this->assertSame($role, $this->visitor->getVisited()[0]);
  }
}
