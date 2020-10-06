<?php
        if (isset($_SESSION['alchemyloggedin']) && $_SESSION['alchemyloggedin'] == 'yes')
        {
            header('Location: //192.168.1.8/AlchemyWebDesignPHP/public_html/index.php');
        }
?>
<html>
    <head>
        <title> Login</title>
        <script>



        </script>

    </head>
    <body>
        <?php
        session_start();

// If there is a username, they are logged in, and we'll show the logged-in view

        if (isset($_SESSION['alchemyloggedin']) && $_SESSION['alchemyloggedin'] == 'yes')
        {
            $loggedIn = true;
        }

        if (isset($_SESSION['username']))
        {
            echo '<p>Logged in as</p>';
            echo '<p>' . $_SESSION['username'] . '</p>';
            echo '<p><a href="/?logout">Log Out</a></p>';
            die();
        }

// If there is no username, they are logged out, so show them the login link
        if (!isset($_SESSION['username']))
        {
            $authorize_url = 'TODO';
            echo '<p>Not logged in</p>';
            echo '<p><a href="login.php">Log In</a></p>';
        }



        $username;
        $password;
        ?>

        <div>
            <form action="admin.php" method="POST">
                <p>
                    <strong>Username:</strong><br>
                    <!--<label for="username">Username:</label>-->
                    <input type="text" name="username"/>
                    <br>
                    <strong>Password:</strong><br>
                    <!--<label for="pass">Password:</label>-->
                    <input type="password" name="password"/>
                    <br>
                <p>-->
                    <input type="submit" value="send"/>
                </p>
            </form>
            <button id="cancelButton">Cancel</button>
        </div>
        <script>
            function cancelWasClicked()
            {
                window.location = "http://localhost/AlchemyWebDesignPHP/public_html/index.php";
//                window.location = "http://www.AlchemyWebDesigns.com/index.php";
            }
//    var button = document.getElementById(cancelButton);        
//     button.onclick = cancelWasClicked(); 

            var cancelButton = document.getElementById("cancelButton");
            cancelButton.onclick = cancelWasClicked;


        </script>
    </body>
</html>

