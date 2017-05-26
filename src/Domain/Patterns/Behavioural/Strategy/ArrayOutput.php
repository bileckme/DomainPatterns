<?php namespace Domain\Patterns\Behavioural\Strategy;

class ArrayOutput implements OutputInterface
{
  public function load()
  {
    return $arrayOfData;
  }
}