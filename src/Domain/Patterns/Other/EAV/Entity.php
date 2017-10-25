<?php namespace Domain\Patterns\Other\EAV;

use SplObjectStorage;

/**
 * Class Entity
 * @package Domain\Patterns\Other\EAV
 */
class Entity implements ValueAccessInterface
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
     * @param string $name
     * @param Value[] $values
     */
    public function __construct( $name, $values)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    /**
     * @return SplObjectStorage
     */
    function getValues()
    {
        return $this->values;
    }

    /**
     * @param $value
     * @return mixed|void
     */
    public function addValue(Value $value)
    {
        $this->values->attach($value);
    }

    /**
     * @param $value
     * @return mixed|void
     */
    public function removeValue(Value $value)
    {
        $this->values->detach($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return join(', ', $text);
    }
}