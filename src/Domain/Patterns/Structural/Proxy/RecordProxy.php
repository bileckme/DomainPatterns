<?php namespace Domain\Patterns\Structural\Proxy;

/**
 * Class RecordProxy
 * @package Domain\Patterns\Structural\Proxy
 */
class RecordProxy extends Record
{
    /**
     * @var bool
     */
    private $isDirty = false;

    /**
     * @var bool
     */
    private $isInitialized = false;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);

        // when the record has data, mark it as initialized
        // since Record will hold our business logic, we don't want to
        // implement this behaviour there, but instead in a new proxy class
        // that extends the Record class
        if (count($data) > 0) {
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }

    /**
     * @param string $name
     * @param string  $value
     */
    public function __set($name, $value)
    {
        $this->isDirty = true;

        parent::__set($name, $value);
    }

    /**
     * @return bool
     */
    public function isDirty()
    {
        return $this->isDirty;
    }
}