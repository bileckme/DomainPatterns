<?php
/**
 * Created by PhpStorm.
 * User: biyi
 * Date: 2017/07/14
 * Time: 3:27 PM
 */

namespace Domain\Patterns\Structural\Adapter;


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