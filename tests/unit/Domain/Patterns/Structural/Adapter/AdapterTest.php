<?php namespace Domain\Patterns\Tests\Structural\Adapter;

use Domain\Patterns\Structural\Adapter\Book;
use Domain\Patterns\Structural\Adapter\EBookAdapter;
use Domain\Patterns\Structural\Adapter\Kindle;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class AdapterTest
 * @package Domain\Patterns\Tests\Structural\Adapter
 */
class AdapterTest extends TestCase
{
    /**
     * Test that one can turn page on book
     */
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    /**
     * Test that one can turn page on kindle like in a normal book
     */
    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}