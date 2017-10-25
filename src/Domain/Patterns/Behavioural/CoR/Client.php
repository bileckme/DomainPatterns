<?php namespace Domain\Patterns\Behavioural\CoR;

/**
 * Class Client
 * @package Domain\Patterns\Behavioural\CoR
 */
class Client
{
    private $parentHandler;

    /**
     * @param $handlersOrder
     */
    public function setChainOrder($handlersOrder)
    {
        // code to setup the chain
    }

    /**
     * @param $request
     * @return mixed
     */
    public function process($request)
    {
        $response = $this->parentHandler->handle($request);

        return $response;
    }
}
