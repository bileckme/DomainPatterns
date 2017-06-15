<?php namespace Domain\Patterns\Tests\Behavioural\Command;

use Domain\Patterns\Behavioural\Command\HelloCommand;
use Domain\Patterns\Behavioural\Command\Receiver;
use Domain\Patterns\Behavioural\Command\Invoker;
use Codeception\TestCase\Test;

/**
 * Class CommandTest
 * @package Domain\Patterns\Tests\Behavioural\Command
 */
class CommandTest extends Test
{
    /**
   * @var Invoker
   */
  protected $invoker;

  /**
   * @var Receiver
   */
  protected $receiver;

  /**
   * before tests run
   */
  public function __before()
  {
      $this->invoker = new Invoker();
      $this->receiver = new Receiver();
  }

  /**
   * after tests run
   */
  protected function _after()
  {
  }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->invoker->run();
        $this->assertEquals('Hello World', $this->receiver->getOutput());
    }
}
