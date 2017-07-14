<?php namespace Domain\Patterns\Structural\Adapter;

/**
 * Class Kindle
 * @package Domain\Patterns\Structural\Adapter
 */
class Kindle implements EBookInterface
{
    /**
     * @var
     */
    private $totalPages = 100;

    /**
     * @var
     */
    private $page = 1;

    /**
     * @return mixed
     */
    public function unlock()
    {

    }

    /**
     * @return mixed
     */
    public function pressNext()
    {
        $this->page++;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return [$this->page, $this->totalPages];
    }
}