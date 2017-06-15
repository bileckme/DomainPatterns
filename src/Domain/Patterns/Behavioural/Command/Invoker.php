<?php namespace Domain\Patterns\Behavioural\Command;

/**
 * Class Invoker
 * @package Domain\Patterns\Behavioural\Command
 */
class Invoker
{
    /**
   * @var CommandInterface
   */
  private $command;

  /**
   * in the invoker we find this kind of method for subscribing the command
   * There can be also a stack, a list, a fixed set ...
   *
   * @param CommandInterface $cmd
   */
  public function setCommand(CommandInterface $cmd)
  {
      $this->command = $cmd;
  }

  /**
   * executes the command; the invoker is the same whatever is the command
   */
  public function run()
  {
      $this->command->execute();
  }
}
