        <?php
        $done = false;
        echo "<h1>Begin</h1><br>";
        $username = "norm";
        $password = "welcome";
        
        if ( isset($_SERVER['HTTP_AUTHORIZATION'])) {
            list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
        }
        while ( !$done )
        {
            echo "<h1>Beginning Loop</h1><br>";
            header('WWW-Authenticate: Basic realm="myRealm""');
            header('HTTP/1.0 401 Unauthorized');
           echo "Please enter your username and password";

            if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
                echo $_SERVER['PHP_AUTH_USER'] . " / " . $_SERVER['PHP_AUTH_PW'];
                if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW']   == $password) 
                {
                    echo "You are now logged in";
                    $done = true;
                } else {
                    unset($_SERVER['PHP_AUTH_USER']);
                    unset($_SERVER['PHP_AUTH_PW']);
                    echo "Invalid username / password combination";
                    header('WWW-Authenticate: Basic realm="myRealm""');
                    header('HTTP/1.0 401 Unauthorized');
                }
            } else {
                unset($_SERVER['PHP_AUTH_USER']);
                unset($_SERVER['PHP_AUTH_PW']);
                echo "Invalid username / password combination";
                header('WWW-Authenticate: Basic realm="myRealm""');
                header('HTTP/1.0 401 Unauthorized');
//                die("Please enter your username and password");
                echo "Please enter your username and password";
            }
        }
         echo "Goodbye World!"."<br>";
        ?>
