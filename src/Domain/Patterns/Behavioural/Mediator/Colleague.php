<?php namespace Domain\Patterns\Behavioural\Mediator;

/**
 * Class Colleague
 * @package Domain\Patterns\Behavioural\Mediator
 */
abstract class Colleague
{

    /**
     * @var MediatorInterface
     */
    protected $mediator;

    /**
     * Colleague constructor.
     * @param $mediator
     */
    public function __construct($medium)
    {
        $this->mediator = $medium;
    }

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    /**
     * @return mixed
     */
    public function getMediator()
    {
        return $this->mediator;
    }

}