<?php namespace Domain\Patterns\Other\Repository;

/**
 * Class PostRepository
 *
 * This class is situated between Entity layer (class Post) and access object layer (MemoryStorage).
 *
 * Repository encapsulates the set of objects persisted in a data store and the operations performed over them
 * providing a more object-oriented view of the persistence layer
 *
 * Repository also supports the objective of achieving a clean separation and one-way dependency
 * between the domain and data mapping layers
 * @package Domain\Patterns\Other\Repository
 */
class PostRepository
{
    /**
     * @var MemoryStorage
     */
    private $persistence;

    /**
     * PostRepository constructor.
     * @param MemoryStorage $persistence
     */
    public function __construct(MemoryStorage $persistence)
    {
        $this->persistence = $persistence;
    }

    /**
     * @param int $id
     * @return Post
     */
    public function findById($id)
    {
        $arrayData = $this->persistence->retrieve($id);

        if (is_null($arrayData)) {
            throw new \InvalidArgumentException(sprintf('Post with ID %d does not exist', $id));
        }

        return Post::fromState($arrayData);
    }

    /**
     * @param Post $post
     */
    public function save(Post $post)
    {
        $id = $this->persistence->persist([
          'text' => $post->getText(),
          'title' => $post->getTitle(),
        ]);

        $post->setId($id);
    }
}