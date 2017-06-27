<?php namespace Domain\Patterns\Behavioural\Iterator;

/**
 * Class Book
 * @package Domain\Patterns\Behavioural\Iterator
 */
class Book
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     */
    public function __construct($title, $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    /**
     * Get the Author
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the Title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the Author and Title
     * @return string
     */
    public function getAuthorAndTitle()
    {
        return $this->getTitle().' by '.$this->getAuthor();
    }
}