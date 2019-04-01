# huenisys/parsers

Simple parsers

## Supported

- Markdown (parses to html)
- Yaml (parses to php object)

## Usage

```php

use huenisys\Parsers\Yaml;
use huenisys\Parsers\Markdown;

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
```
