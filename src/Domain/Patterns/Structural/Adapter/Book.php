<?php
/**
 * Created by PhpStorm.
 * User: biyi
 * Date: 2017/07/14
 * Time: 3:27 PM
 */

namespace Domain\Patterns\Structural\Adapter;


class Book implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Opens book
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * Turns page
     */
    public function turnPage()
    {
        $this->page++;
    }
}