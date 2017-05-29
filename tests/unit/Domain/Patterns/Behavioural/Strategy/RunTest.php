<?php namespace Domain\Patterns\Tests\Behavioural\Strategy;
use Domain\Patterns\Behavioural\Strategy\ArrayOutput;
use Domain\Patterns\Behavioural\Strategy\BaseOutput;
use Domain\Patterns\Behavioural\Strategy\OutputInterface;
use Domain\Patterns\Behavioural\Strategy\JsonStringOutput;
use Domain\Patterns\Behavioural\Strategy\SerializedArrayOutput;
use Domain\Patterns\Behavioural\Strategy\Client;
use Codeception\TestCase\Test;
use Mockery\Mock;

/**
 * Class RunTest
 * @package Domain\Patterns\Tests\Behavioural\Strategy
 */
class RunTest extends Test
{
  /**
   * @var \UnitTester
   */
  protected $tester;

  protected $client;

  protected $mockOutput;

  /**
   * before tests run
   */
  protected function _before()
  {
    $this->client = new Client();
    $this->mockOutput = $this->getMockBuilder(OutputInterface::class)
                             ->disableOriginalConstructor()
                             ->getMock();
  }

  /**
   * after tests run
   */
  protected function _after()
  {

  }

  /**
   * Testing Strategy Pattern
   */
  public function testStrategyPattern()
  {
    $this->assertInstanceOf(OutputInterface::class, $this->mockOutput);
    $this->client->setOutput($this->mockOutput);
    $this->assertNull($this->client->loadOutput());

    // Want an array?
    $array = new ArrayOutput();
    $array->set([1, 2, 3, 4]);
    $this->client->setOutput($array);
    $this->assertInternalType('array',$this->client->loadOutput());

    // Want a JSON ?
    $json = new JsonStringOutput();
    $json->set([2,3,4,5]);
    $this->client->setOutput($json);
    $this->assertInternalType('string', $this->client->loadOutput());

    // Want a serialized array
    $serial = new SerializedArrayOutput();
    $serial->set([2,3,4,5]);
    $this->client->setOutput($serial);
    $this->assertInternalType('string', $this->client->loadOutput());
  }
}