<?php namespace Domain\Patterns\Other\EAV;

/**
 * Class Value
 * @package Domain\Patterns\Other\EAV
 */
class Value implements ValueInterface
{
    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var string
     */
    private $name;

    /**
     * Value constructor.
     * @param Attribute $attribute
     * @param string $name
     */
    public function __construct(Attribute $attribute, $name)
    {
        $this->name = $name;
        $this->setAttribute($attribute);
    }

    /**
     * @param $attribute
     * @return mixed
     */
    public function setAttribute(Attribute $attribute)
    {
        $this->attribute = $attribute;
        $attribute->addValue($this);
    }

    /**
     * @return mixed
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s: %s', $this->attribute, $this->name);
    }
}