<?php namespace Domain\Patterns\Structural\Composite;

/**
 * Class TextElement
 * @package Domain\Patterns\Structural\Composite
 */
class TextElement implements RenderableInterface
{
    /**
     * @var string
     */
    private $text;

    /**
     * TextElement constructor.
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function render()
    {
        return $this->text;
    }
}