<?php

namespace Blogger;

class Blogger
{
    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function test()
    {
        return $this->test;
    }
}
