<?php namespace Domain\Patterns\Other\Delegation;


/**
 * Class TeamLead
 * @package Domain\Patterns\Other\Delegation
 */
class TeamLead
{
    /**
     * @var JuniorDeveloper
     */
    private $junior;

    /**
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->junior = $junior;
    }

    /**
     * @return string
     */
    public function writeCode()
    {
        return $this->junior->writeBadCode();
    }
}