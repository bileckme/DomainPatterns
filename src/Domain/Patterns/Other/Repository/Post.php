<?php namespace Domain\Patterns\Other\Repository;

/**
 * Class Post
 * @package Domain\Patterns\Other\Repository
 */
class Post
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @param array $state
     * @return Post
     */
    public static function fromState(array $state)
    {
        return new self(
          $state['id'],
          $state['title'],
          $state['text']
        );
    }

    /**
     * @param int|null $id
     * @param string $text
     * @param string $title
     */
    public function __construct($id, $title, $text)
    {
        $this->id = $id;
        $this->text = $text;
        $this->title = $title;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}