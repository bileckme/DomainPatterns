<?php namespace Domain\Patterns\Creational\AbstractFactory;

/**
 * Class HtmlFactory
 * @package Domain\Patterns\Creational\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * @param string $content
     * @return Text
     */
    public function createText($content)
    {
        return new HtmlText($content);
    }
}