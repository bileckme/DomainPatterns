<?php namespace Domain\Patterns\Creational\AbstractFactory;

/**
 * Class JsonFactory
 * @package Domain\Patterns\Creational\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    /**
     * @param string $content
     * @return Text
     */
    public function createText($content)
    {
        return new JsonText($content);
    }
}