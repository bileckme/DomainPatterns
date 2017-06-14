<?php namespace Domain\Patterns\Behavioural\Observer;

/**
 * Interface ObserverInterface
 * @package Domain\Patterns\Behavioural\Observer
 */
interface ObserverInterface
{
    /**
     * Update state
     * @param Subject $state
     * @return mixed
     */
    public function update(Subject $state);
}
