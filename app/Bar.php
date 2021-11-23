<?php
namespace App;
use app\Moo;

class Bar
{
    private $moo;
    function __construct(Moo $moo)
    {
        $this->moo = $moo;
    }
}
