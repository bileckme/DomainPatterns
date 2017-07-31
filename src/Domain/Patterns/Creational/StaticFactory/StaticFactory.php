<?php namespace Domain\Patterns\Creational\StaticFactory;

use InvalidArgumentException;

/**
 * Class StaticFactory
 * @package Domain\Patterns\Creational\StaticFactory
 */
final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return FormatterInterface
     */
    public static function factory($type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}