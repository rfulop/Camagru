<?php

class Home extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "We are in home";
    }

    public function test($arg = false)
    {
        echo "we are inside test";
        echo "arg: " . $arg;
    }
}