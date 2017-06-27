<?php namespace Domain\Patterns\Behavioural\Mediator;

/**
 * Interface MediatorInterface
 * @package Domain\Patterns\Behavioural\Mediator
 */
interface MediatorInterface
{
    /**
     * @param $content
     * @return mixed
     */
    public function sendResponse($content);

    /**
     * @return mixed
     */
    public function makeRequest();

    /**
     * @return mixed
     */
    public function queryDb();
}