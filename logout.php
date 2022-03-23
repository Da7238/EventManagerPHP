<?php

            if (isset($_SESSION['loggedIn'])) { 
                        echo "Hello admin, you logged in on {$_COOKIE['loggedIn']}.";
                        
            unset($_SESSION['name']);
            session_unset();
            if(isset($_COOKIE[session_name()])) {
                $params = session_get_cookie_params();

                setCookie(session_name(), '', 1, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
            }
            if(isset($_COOKIE['loggedIn'])) {
                $params = session_get_cookie_params();

                setCookie(session_name(), '', 1, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
            }
            session_destroy();
        } else {//redirect to login.php
            header("Location: login.php");
        }



?>