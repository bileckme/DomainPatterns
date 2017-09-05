<?php namespace Domain\Patterns\Structural\Bridge;

/**
 * Class HelloWorldService
 * @package Domain\Patterns\Structural\Bridge
 */
class HelloWorldService extends Service
{

    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}