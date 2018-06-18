<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/06/18
 * Time: 19:26
 */

class View
{
    function __construct()
    {
        echo 'This is the view.';
    }

    public function render($name)
    {
        require 'views/' . $name . '.php';
    }
}