<?php namespace Domain\Patterns\Structural\Bridge;

/**
 * Class PlainTextFormatter
 * @package Domain\Patterns\Structural\Bridge
 */
class PlainTextFormatter implements FormatterInterface
{
    /**
     * Formats text
     * @param string $text
     * @return string
     */
    public function format($text)
    {
        return $text;
    }
}