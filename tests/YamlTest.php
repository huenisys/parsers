<?php

namespace huenisys\Parsers\Tests;

use huenisys\Parsers\Yaml;
use PHPUnit\Framework\TestCase;

class YamlTest extends TestCase
{
    /** @test **/
    public function simple_yaml_is_parsed()
    {
        $this->assertEquals(['title' => 'Some Title'], Yaml::parseText('title: Some Title'));
    }

    /** @test **/
    public function yaml_file_is_parsed()
    {
        $filePath = __DIR__.'/../test-files/hello.yaml';
        $this->assertEquals(['hello' => 'world'], Yaml::parseFile($filePath));
    }

    /** @test **/
    public function blank_yaml_file_returns_null()
    {
        $this->assertEquals(null, Yaml::parse(__DIR__.'/../test-files/empty.yaml'));
    }

    /** @test **/
    public function empty_string_returns_empty()
    {
        $this->assertEquals('', Yaml::parse(''));
    }
}
