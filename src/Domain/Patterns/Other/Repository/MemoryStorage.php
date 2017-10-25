<?php namespace Domain\Patterns\Other\Repository;

/**
 * Class MemoryStorage
 * @package Domain\Patterns\Other\Repository
 */
class MemoryStorage
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @var int
     */
    private $lastId = 0;

    /**
     * @param array $data
     * @return int
     */
    public function persist(array $data)
    {
        $this->lastId++;

        $data['id'] = $this->lastId;
        $this->data[$this->lastId] = $data;

        return $this->lastId;
    }

    /**
     * @param int $id
     * @return array
     */
    public function retrieve($id)
    {
        if (!isset($this->data[$id])) {
            throw new \OutOfRangeException(sprintf('No data found for ID %d', $id));
        }

        return $this->data[$id];
    }

    /**
     * @param int $id
     */
    public function delete($id)
    {
        if (!isset($this->data[$id])) {
            throw new \OutOfRangeException(sprintf('No data found for ID %d', $id));
        }

        unset($this->data[$id]);
    }
}