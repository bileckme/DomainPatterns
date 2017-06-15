<?php namespace Domain\Patterns\Behavioural\Command;

use Domain\Patterns\Behavioural\Command\CommandInterface;

class HelloCommand implements CommandInterface
{
    /**
   * @var Receiver
   */
  private $output;

  /**
   * Execute command
   * @return mixed
   */
  public function execute()
  {
      $this->output->write('Hello World');
  }
}
