<?php namespace Domain\Patterns\Structural\Proxy;

class Record
{
    /**
     * @var string[]
     */
    private $data;

    /**
     * @param string[] $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param string $name
     * @param string  $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param string $name
     * @return string
     */
    public function __get($name)
    {
        if (!isset($this->data[$name])) {
            throw new \OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];
    }
}