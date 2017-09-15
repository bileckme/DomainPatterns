<?php namespace Domain\Patterns\Tests\Structural\Composite;

use Domain\Patterns\Structural\Composite\Form;
use Domain\Patterns\Structural\Composite\InputElement;
use Domain\Patterns\Structural\Composite\TextElement;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class CompositeTest
 * @package Domain\Patterns\Tests\Structural\Composite
 */
class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        // This is just an example, in a real world scenario it is important to remember that web browsers do not
        // currently support nested forms

        $this->assertEquals(
          '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
          $form->render()
        );
    }
}