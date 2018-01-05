<?php

use PHPUnit\Framework\TestCase;
use Blogit\Blogit;

class BlogitTest extends TestCase
{
    public function testBlogger()
    {
        $blogger = new Blogit();
        
        $output = $blogger->test('Hello World');

        $this->assertEquals('Hello World', $output);
    }
}
