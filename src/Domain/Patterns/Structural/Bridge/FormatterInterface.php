<?php namespace Domain\Patterns\Structural\Bridge;

/**
 * Interface FormatterInterface
 * @package Domain\Patterns\Structural\Bridge
 */
interface FormatterInterface
{
    /**
     * Formats text
     * @param string $text
     * @return mixed
     */
    public function format($text);
}