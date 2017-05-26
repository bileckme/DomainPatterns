<?php namespace Domain\Patterns\Behavioural\Strategy;

class SerializedArrayOutput implements OutputInterface
{
    public function load()
    {
        return serialize($arrayOfData);
    }
}
