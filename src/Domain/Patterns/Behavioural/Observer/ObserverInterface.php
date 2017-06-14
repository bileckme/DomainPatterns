<?php namespace Domain\Patterns\Behavioural\Observer;

/**
 * Interface ObserverInterface
 * @package Domain\Patterns\Behavioural\Observer
 */
interface ObserverInterface
{
    public function update(Subject $subjectState);
}
