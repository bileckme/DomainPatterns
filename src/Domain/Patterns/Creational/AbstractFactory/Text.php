<?php namespace Domain\Patterns\Creational\AbstractFactory;

/**
 * Class Text
 * @package Domain\Patterns\Creational\AbstractFactory
 */
abstract class Text
{
    /**
     * @var string
     */
    private $text;

    /**
     * Text constructor.
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }
}