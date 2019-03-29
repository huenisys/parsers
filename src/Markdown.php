<?php

namespace huenisys\Parsers;

class Markdown extends AbstractFileParser
{
    /**
     * Parse markdown content into html.
     *
     * @param string   $string
     *
     * @return string html string
     */
    public static function parseText(string $string)
    {
        return \Parsedown::instance()->text($string);
    }
}
