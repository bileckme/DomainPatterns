<?php namespace Domain\Patterns\Creational\Pool;

use DateTime;

/**
 * Class StringReverseWorker
 * @package Domain\Patterns\Creational\Pool
 */
class StringReverseWorker
{
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * StringReverseWorker constructor.
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @param string $text
     * @return string
     */
    public function run($text)
    {
        return strrev($text);
    }
}