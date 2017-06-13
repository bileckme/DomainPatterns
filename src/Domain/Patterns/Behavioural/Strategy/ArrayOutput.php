<?php namespace Domain\Patterns\Behavioural\Strategy;

class ArrayOutput extends BaseOutput
{
    protected $data = [];

    public function set(array $data){
      $this->data = $data;
    }

    public function load()
    {
        return $this->data;
    }
}