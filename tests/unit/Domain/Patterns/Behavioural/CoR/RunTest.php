<?php namespace Domain\Patterns\Tests\Behavioural\CoR;

use Codeception\TestCase\Test;
/**
 * Class RunTest
 * @package Domain\Patterns\Tests\Behavioural\CoR
 */
class RunTest extends Test
{
    /**
   * @var \UnitTester
   */
  protected $tester;

    protected $client;

    protected $order;

    protected $request;

  /**
   * before tests run
   */
  protected function _before()
  {
      $this->client = new Client();
      $this->order = $this->request->getHandlerOrder();
  }

  /**
   * after tests run
   */
  protected function _after()
  {
  }

  /**
   * Testing Chain of Responsibility Pattern
   */
  public function testCoRPattern()
  {
      $this->client->setChainOrder($this->order);
      $this->client->process($this->request);
  }
}
