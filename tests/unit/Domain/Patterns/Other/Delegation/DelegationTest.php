<?php namespace Domain\Patterns\Tests\Other\Delegation;

use Domain\Patterns\Other\Delegation\JuniorDeveloper;
use Domain\Patterns\Other\Delegation\TeamLead;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class DelegationTest
 * @package Domain\Patterns\Tests\Other\Delegation
 */
class DelegationTest extends TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new JuniorDeveloper();
        $teamLead = new TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}