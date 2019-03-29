<?php

namespace huenisys\Parsers\Tests;

use huenisys\Parsers\Markdown;
use PHPUnit\Framework\TestCase;

class MarkdownTest extends TestCase
{
    /** @test **/
    public function simple_md_is_parsed()
    {
        $this->assertEquals('<h1>hello</h1>', Markdown::parseText('# hello'));
        $this->assertEquals('<h2>hello</h2>', Markdown::parseText('## hello'));
    }

    /** @test **/
    public function md_file_is_parsed()
    {
        $filePath = __DIR__.'/../test-files/hello.md';
        $this->assertEquals('<h1>hello world</h1>', Markdown::parseFile($filePath));
    }

    /** @test **/
    public function false_if_file_does_not_exist()
    {
        $filePath = __DIR__.'/../test-files/hello-dne.md';
        $this->assertEquals(false, Markdown::parseFile($filePath));
    }
}
