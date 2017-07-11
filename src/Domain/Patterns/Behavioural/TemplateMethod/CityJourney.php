<?php namespace Domain\Patterns\Behavioural;

/**
 * Class CityJourney
 * @package Domain\Patterns\Behavioural
 */
class CityJourney extends Journey
{

    /**
     * This method must be implemented, this is the key-feature of this pattern.
     * @return string
     */
    protected function enjoyVacation()
    {
        return "Eat, drink, take photos and sleep";
    }

    /**
     * This method is also part of the algorithm but it is optional.
     * You can override it only if you need to
     *
     * @return null|string
     */
    protected function buyGift()
    {
        return "Buy a gift";
    }
}