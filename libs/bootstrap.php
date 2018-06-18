<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/06/18
 * Time: 19:16
 */

class Bootstrap
{
    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');

        $url = explode('/', $url);

        if (empty($url[0]))
        {
            require 'controllers/home.php';
            $controller = new Home();
            return false;
        }
        print_r($url);

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/error.php';
            $controller = new MyError();
            return false;
            //    throw new Exception("The file $file does not exists.");
        }

        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }
}