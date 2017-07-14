<?php namespace Domain\Patterns\Structural\Adapter;

interface EBookInterface
{

    /**
     * @return mixed
     */
    public function unlock();

    /**
     * @return mixed
     */
    public function pressNext();

    /**
     * @return int[]
     */
    public function getPage();
}