<?php namespace Domain\Patterns\Behavioural\Command;

/**
 * Interface CommandInterface
 * @package Domain\Patterns\Behavioural\Command
 */
interface CommandInterface
{
  /**
   * Execute command
   * @return mixed
   */
  public function execute();
}