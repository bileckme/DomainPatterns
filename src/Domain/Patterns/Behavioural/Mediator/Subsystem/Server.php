<?php namespace Domain\Patterns\Behavioural\Mediator\Subsystem;

use Domain\Patterns\Behavioural\Mediator\Colleague;

/**
 * Class Server
 * @package Domain\Patterns\Behavioural\Mediator
 */
class Server extends Colleague
{

    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}