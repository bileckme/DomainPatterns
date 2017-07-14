<?php namespace Domain\Patterns\Structural\Adapter;

/**
 * Class EBookAdapter
 * @package Domain\Patterns\Structural\Adapter
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * This class makes the proper translation from one interface to another.
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * Gets the page
     * @return int
     */
    public function getPage()
    {
        return $this->eBook->getPage()[0];
    }

    /**
     * Turns the page
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}