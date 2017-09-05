<?php namespace Domain\Patterns\Tests\Structural\Bridge;

use PHPUnit_Framework_TestCase as Test;
use Domain\Patterns\Structural\Bridge\HelloWorldService;
use Domain\Patterns\Structural\Bridge\HtmlFormatter;
use Domain\Patterns\Structural\Bridge\PlainTextFormatter;
/**
 * Class BridgeTest
 * @package Domain\Patterns\Tests\Structural\Bridge
 */
class BridgeTest extends Test
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());

        // now change the implementation and use the HtmlFormatter instead
        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}