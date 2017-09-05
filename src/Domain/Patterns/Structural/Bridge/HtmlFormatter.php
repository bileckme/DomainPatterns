<?php namespace Domain\Patterns\Structural\Bridge;

/**
 * Class HtmlFormatter
 * @package Domain\Patterns\Structural\Bridge
 */
class HtmlFormatter implements FormatterInterface
{

    /**
     * Formats text
     * @param string $text
     * @return mixed
     */
    public function format($text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}