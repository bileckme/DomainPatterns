<?php namespace Domain\Patterns\Behavioural\Strategy;

class JsonStringOutput implements OutputInterface
{
    public function load()
    {
        return json_encode($arrayOfData);
    }
}
