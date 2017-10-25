<?php namespace Domain\Patterns\Other\Delegation;

/**
 * Class JuniorDeveloper
 * @package Domain\Patterns\Other\Delegation
 */
class JuniorDeveloper
{
    /**
     * @return string
     */
    public function writeBadCode()
    {
        return 'Some junior developer generated code...';
    }
}