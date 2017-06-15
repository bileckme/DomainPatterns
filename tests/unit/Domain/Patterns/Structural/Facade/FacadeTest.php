<?php namespace Domain\Patterns\Tests\Structural\Facade;

use Domain\Patterns\Structural\Facade\Facade;
use Domain\Patterns\Structural\Facade\OsInterface;
use Domain\Patterns\Structural\Facade\BiosInterface;
use Codeception\TestCase\Test;
use Mockery\Mock;

/**
 * Class FacadeTest
 * @package Domain\Patterns\Tests\Structural\Facade
 */
class FacadeTest extends Test
{
    protected $os;
    protected $bios;

  /**
   * before tests run
   */
  protected function _before()
  {
      $this->os = $this->getMockBuilder(OsInterface::class)
      ->disableOriginalConstructor()
      ->getMock();
      $this->bios = $this->getMockBuilder(BiosInterface::class)
      ->setMethods(['launch', 'execute', 'waitForKeyPress'])
      ->disableOriginalConstructor()
      ->disableAutoload()
      ->getMock();
  }

    public function testComputerOn()
    {
        $this->os->method('getName')
      ->will($this->returnValue('Linux'));


        $this->bios->expects($this->once())
          ->method('launch')
          ->with($this->os);

        $facade = new Facade($this->bios, $this->os);

    // the facade interface is simple
    $facade->turnOn();

    // but you can also access the underlying components
    $this->assertEquals('Linux', $this->os->getName());
    }
}
