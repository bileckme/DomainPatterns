<?php namespace Domain\Patterns\Behavioural\Mediator\Subsystem;

use Domain\Patterns\Behavioural\Mediator\Colleague;

/**
 * Class Database
 * @package Domain\Patterns\Behavioural\Mediator\Subsystem
 */
class Database extends Colleague
{

    /**
     * @return string
     */
    public function getData()
    {
        return 'World';
    }
}