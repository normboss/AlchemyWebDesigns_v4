<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

	unset($_SERVER['PHP_AUTH_USER']);
	unset($_SERVER['PHP_AUTH_PW']);
  if (isset($_SERVER['PHP_AUTH_USER']) &&
  	  isset($_SERVER['PHP_AUTH_PW']))
  {
		echo "unset failed";
  }
  else
  {
	echo "unset succeded";
         echo '<a href="admin.php">Click to Enter</a>';

  }
?>
