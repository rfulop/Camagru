<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17/06/18
 * Time: 17:41
 */

class Auth
{
    private $Database;
    private $salt = 'asok4qq7';


    function __construct()
    {
        global $Database;
        $this->$Database = $Database;
    }

    function validate_login($user, $pass)
    {
        if ($stmt = $this->Database->prepare('SELECT * FROM users WHERE username = ? AND password = ?'))
        {
            $stmt->bind_param('ss', $user, md5($pass . $this->salt));
            $stmt->execute();
            $stmt->store_result();

            if ($stmt)
            {
                $stmt->close;
                return TRUE;
            }
            else
            {
                $stmt->close();
                return FALSE;
            }
        }
        else
        {
            throw Exception;
        }
    }

    function checkLoginSatus()
    {
        if (isset($_SESSION['loggedin']))
        {
            return TRUE;

        }
        else
        {
            return FALSE;
        }
    }

    function logout()
    {
        session_destroy();
        session_start();
    }
}