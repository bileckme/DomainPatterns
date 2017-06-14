<?php namespace Domain\Patterns\Behavioural\NullObject;

/**
 * Class RealObject
 * @package Domain\Patterns\Behavioural\NullObject
 */
class RealObject extends Object
{
    public function reflection()
    {
        return get_class(RealObject::class);
    }
}
