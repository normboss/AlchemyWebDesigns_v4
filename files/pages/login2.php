<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//        echo "Entering login2.php";
        if ( !isset($_COOKIE["ALCHEMYLOGGEDIN1"]) || $_COOKIE["ALCHEMYLOGGEDIN1"] != "TRUE" ) 
        {
            $username = 'norm';
            $password = 'welcome';
//            echo "In while loop login2.php";

            $done = false;
            while (!$done) 
            {
                if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
                {
                    echo $_SERVER['PHP_AUTH_USER'] ."  ". $_SERVER['PHP_AUTH_PW'] ;
                    if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW']   == $password) 
                    {
                        echo "You are now logged in";
                        setcookie("ALCHEMYLOGGEDIN1", "TRUE", time() + (60), "/");
                        $done = true;
                    } 
                    else
                    {
                        unset($_SERVER['PHP_AUTH_USER']);
                        unset($_SERVER['PHP_AUTH_PW']);
                        echo "Invalid username / password combination";
                          header('WWW-Authenticate: Basic realm="Restricted Section"');
                          header('HTTP/1.0 401 Unauthorized');
                    }
                }
                else
                {
                    header('WWW-Authenticate: Basic realm="Restricted Section"');
                    header('HTTP/1.0 401 Unauthorized');
                    die("Please enter your username and password");
                }
            }
        }
            
       header('Location: //www.alchemywebdesigns.com/index.php');
//        header('Location: //localhost/AlchemyWebDesignPHP/public_html/index.php');
        die();
?>
