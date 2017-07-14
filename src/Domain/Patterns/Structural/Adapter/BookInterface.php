<?php namespace Domain\Patterns\Structural\Adapter;

/**
 * Interface BookInterface
 * @package Domain\Patterns\Structural\Adapter
 */
interface BookInterface
{
    /**
     * @return int
     */
    public function getPage();

    /**
     * @return mixed
     */
    public function open();

    /**
     * @return mixed
     */
    public function turnPage();
}