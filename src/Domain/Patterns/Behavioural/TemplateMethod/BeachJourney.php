<?php namespace Domain\Patterns\Behavioural;

/**
 * Class BeachJourney
 * @package Domain\Patterns\Behavioural
 */
class BeachJourney extends Journey
{

    /**
     * This method must be implemented, this is the key-feature of this pattern.
     * @return string
     */
    protected function enjoyVacation()
    {
        return "Swimming and sun-bathing";
    }
}