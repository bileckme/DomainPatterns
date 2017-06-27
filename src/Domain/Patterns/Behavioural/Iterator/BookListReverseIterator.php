<?php namespace Domain\Patterns\Behavioural\Iterator;

/**
 * Class BookListReverseIterator
 * @package Domain\Patterns\Behavioural\Iterator
 */
class BookListReverseIterator extends BookListIterator
{
    /**
     * @var BookList
     */
    public $bookList;

    /**
     * @var int
     */
    public $currentBook;

    /**
     * BookListReverseIterator constructor.
     * @param $bookList
     */
    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }
}