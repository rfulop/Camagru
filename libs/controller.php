<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/06/18
 * Time: 19:03
 */

class Controller
{
    function __construct()
    {
        echo 'Main controller.';
        $this->view = new View();
    }
}