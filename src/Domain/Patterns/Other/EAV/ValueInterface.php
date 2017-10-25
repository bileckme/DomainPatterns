<?php namespace Domain\Patterns\Other\EAV;

/**
 * Interface ValueInterface
 * @package Domain\Patterns\Other\EAV
 */
interface ValueInterface
{
    /**
     * @param $attribute
     * @return void
     */
    public function setAttribute(Attribute $attribute);

    /**
     * @return Attribute
     */
    public function getAttribute();
}