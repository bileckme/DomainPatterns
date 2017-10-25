<?php namespace Domain\Patterns\Tests\Other\Repository;

use Domain\Patterns\Other\Repository\MemoryStorage;
use Domain\Patterns\Other\Repository\Post;
use Domain\Patterns\Other\Repository\PostRepository;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class RepositoryTest
 */
class RepositoryTest extends TestCase
{
    public function testCanPersistAndFindPost()
    {
        $repository = new PostRepository(new MemoryStorage());
        $post = new Post(null, 'Repository Pattern', 'Design Patterns PHP');

        $repository->save($post);

        $this->assertEquals(1, $post->getId());
        $this->assertEquals($post->getId(), $repository->findById(1)->getId());
    }
}