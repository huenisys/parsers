<?php

namespace huenisys\Parsers;

abstract class AbstractFileParser
{
    abstract public static function parseText(string $string);

    public static function parseFile(string $file)
    {
        if ( file_exists($file) )
            return static::parseText(file_get_contents($file));
        else
            return false;
    }

    public static function parse(string $file_or_content)
    {
        if ( static::parseFile($file_or_content) === false )
            return static::parseText($file_or_content);
    }
}
