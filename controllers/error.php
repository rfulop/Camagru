<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/06/18
 * Time: 19:52
 */

class MyError extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo 'Error controller';

        $this->view->msg = "Message d'erreur";
        $this->view->render('errorfront');
    }

}

