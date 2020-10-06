<?php
  $username = 'norm';
  $password = 'welcome';

   
	$done = false;
	while (!$done) 
	{
		if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
		{
                            echo $_SERVER['PHP_AUTH_USER'] . " / " . $_SERVER['PHP_AUTH_PW'];
//			if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW']   == $password) 
                            if ( true )
			{
				echo "You are now logged in";
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
	die();
?>
