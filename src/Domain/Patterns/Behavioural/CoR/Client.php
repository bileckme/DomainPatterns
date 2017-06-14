<?php namespace Domain\Patterns\Behavioural\CoR;

class Client
{
    private $parentHandler;

    public function setChainOrder($handlersOrder)
    {
        // code to setup the chain
    }

    public function process($request)
    {
        $response = $this->parentHandler->handle($request);

        return $response;
    }
}
