<?php namespace Domain\Patterns\Behavioural\Iterator;

use Iterator;

/**
 * Class BookListIterator
 * @package Domain\Patterns\Behavioural\Iterator
 */
class BookListIterator implements Iterator
{

    /**
     * @var BookList
     */
    protected $bookList;

    /**
     * @var int
     */
    private $currentBook;

    /**
     * BookListIterator constructor.
     * @param $bookList
     */
    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Book.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->books[$this->currentBook];
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->currentBook++;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->currentBook;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return isset($this->books[$this->currentBook]);
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->currentBook = 0;
    }
}