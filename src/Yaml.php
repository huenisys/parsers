<?php

namespace huenisys\Parsers;

use Symfony\Component\Yaml\Yaml as SymfonyYaml;

class Yaml extends AbstractFileParser
{
    /**
     * Parse markdown content into html.
     *
     * @param string $string
     *
     * @return mixed
     */
    public static function parseText($string)
    {
        return SymfonyYaml::parse($string);
    }
}
