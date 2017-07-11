<?php namespace Domain\Patterns\Creational\Builder;

/**
 * Interface BuilderInterface
 * @package Domain\Patterns\Creational\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle();
}