<?php namespace Domain\Patterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package Domain\Patterns\Creational\AbstractFactory
 *
 * In this case, the abstract factory is a contract for creating some components
 * for the web. There are two ways of rendering text: HTML and JSON
 *
 */
abstract class AbstractFactory
{
    /**
     * @param string $content
     * @return Text
     */
    abstract public function createText($content);
}