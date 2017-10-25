<?php namespace Domain\Patterns\Other\EAV;

use SplObjectStorage;

/**
 * Class Attribute
 * @package Domain\Patterns\Other\EAV
 */
class Attribute implements ValueAccessInterface
{
    /**
     * @var SplObjectStorage
     */
    private $values;

    /**
     * @var string
     */
    private $name;

    /**
     * Attribute constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;
    }

    /**
     * @param Value $value
     * @return void
     */
    public function addValue(Value $value)
    {
        $this->values->attach($value);
    }

    /**
     * @return SplObjectStorage
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function removeValue(Value $value)
    {
        $this->values->attach($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}