<?php namespace Domain\Patterns\Structural\Flyweight;

/**
 * Class CharacterFlyweight
 * @package Domain\Patterns\Flyweight\Flyweight
 */
class CharacterFlyweight implements FlyweightInterface
{
    /**
     * Any state stored by the concrete flyweight must be independent of its context.
     * For flyweights representing characters, this is usually the corresponding character code.
     *
     * @var string
     */
    private $name;

    /**
     * CharacterFlyweight constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $font
     * @return string
     */
    public function render($font)
    {
        // Clients supply the context-dependent information that the flyweight needs to draw itself
        // For flyweights representing characters, extrinsic state usually contains e.g. the font.

        return sprintf('Character %s with font %s', $this->name, $font);
    }
}