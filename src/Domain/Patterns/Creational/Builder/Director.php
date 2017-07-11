<?php namespace Domain\Patterns\Creational\Builder;

/**
 * Class Director
 * @package Domain\Patterns\Creational\Builder
 */
class Director
{
    /**
     * @param BuilderInterface $builder
     * @return mixed
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}