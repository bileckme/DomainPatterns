<?php namespace Domain\Patterns\Tests\Creational\AbstractFactory;

use Domain\Patterns\Creational\AbstractFactory\HtmlFactory;
use Domain\Patterns\Creational\AbstractFactory\HtmlText;
use Domain\Patterns\Creational\AbstractFactory\JsonFactory;
use Domain\Patterns\Creational\AbstractFactory\JsonText;
use PHPUnit_Framework_TestCase as Test;

/**
 * Class AbstractFactoryTest
 * @package Domain\Patterns\Tests\Creational\AbstractFactory
 */
class AbstractFactoryTest extends Test
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(JsonText::class, $text);
    }
}