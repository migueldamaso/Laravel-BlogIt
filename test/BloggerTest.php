<?php

use PHPUnit\Framework\TestCase;
use Blogger\Blogger;

class BloggerTest extends TestCase
{
    public function testBlogger()
    {
        $blogger = new Blogger('Hello World');
        
        $output = $blogger->test();

        $this->assertEquals('Hello World', $output);
    }
}
