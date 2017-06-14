<?php namespace Domain\Patterns\Tests\Structural\Decorator;

use Domain\Patterns\Structural\Decorator\Webservice;
use Domain\Patterns\Structural\Decorator\JsonRenderer;
use Domain\Patterns\Structural\Decorator\XmlRenderer;

/**
 * Class DecoratorTest
 * @package Domain\Patterns\Tests\Structural\Decorator
 */
class DecoratorTest extends Test
{
  /**
   * @var Domain\Patterns\Structural\Decorator\Webservice
   */
  private $service;

  /**
   * before tests run
   */
  protected function _before()
  {
    $this->service = new Webservice('foobar');
  }

  /**
   * Test JsonDecorator
   */
  public function testJsonDecorator()
  {
    $service = new JsonRenderer($this->service);

    $this->assertEquals('"foobar"', $service->renderData());
  }

  /**
   * Test XmlDecorator
   */
  public function testXmlDecorator()
  {
    $service = new XmlRenderer($this->service);

    $this->assertXmlStringEqualsXmlString(
      '<?xml version="1.0"?><content>foobar</content>', $service->renderData()
    );
  }
}