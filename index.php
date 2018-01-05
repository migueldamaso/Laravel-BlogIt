<?php

require_once('vendor/autoload.php');

use Blogger\Blogger;

$blog = new Blogger('hello world');

echo $blog->test();
