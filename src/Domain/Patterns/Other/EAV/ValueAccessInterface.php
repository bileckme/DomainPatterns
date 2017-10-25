<?php namespace Domain\Patterns\Other\EAV;

/**
 * Interface ValueAccessInterface
 * @package Domain\Patterns\Other\EAV
 */
interface ValueAccessInterface
{
    /**
     * @return mixed
     */
    public function getValues();

    /**
     * @param $value
     * @return mixed
     */
    public function addValue(Value $value);

    /**
     * @param $value
     * @return mixed
     */
    public function removeValue(Value $value);
}