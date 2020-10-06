<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $username = ['Norm', 'Jane'];
  $password = ['welcome', 'Herbert'];

   
	$done = false;
	while (!$done) 
	{
		if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
		{
			if (($_SERVER['PHP_AUTH_USER'] == $username[0] && $_SERVER['PHP_AUTH_PW']   == $password[0] ) ||
                                ($_SERVER['PHP_AUTH_USER'] == $username[1] && $_SERVER['PHP_AUTH_PW']   == $password[1] )   ) 
			{
				echo "You are now logged in";
				$done = true;
                                    echo '<p><a href="index.php">Click to Enter</a>';
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
	die();
?>
