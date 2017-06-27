<?php namespace Domain\Patterns\Behavioural\Mediator\Subsystem;

use Domain\Patterns\Behavioural\Mediator\Colleague;

/**
 * Class Client
 * @package Domain\Patterns\Behavioural\Mediator
 */
class Client extends Colleague
{
    /**
     *
     */
    public function request()
    {
        $this->mediator->makeRequest();
    }

    /**
     * @param string $content
     */
    public function output($content)
    {
        echo $content;
    }
}