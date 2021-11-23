<?php
namespace App;
use app\Bar;
class Foo
{
    private $bar;
    function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }
}
