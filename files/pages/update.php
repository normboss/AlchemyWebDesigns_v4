<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Alchemy Web Design</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/update.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
            window.location.reload(true);
            return true;
        }
    </script>

</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if (empty($_POST["name"])) {
        //     $nameErr = "Name is required";
        // } else {
        //     $name = test_input($_POST["name"]);
        //     // check if name only contains letters and whitespace
        //     if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        //         $nameErr = "Only letters and white space allowed";
        //     }
        // }

        // if (empty($_POST["email"])) {
        //     $emailErr = "Email is required";
        // } else {
        //     $email = test_input($_POST["email"]);
        //     // check if e-mail address is well-formed
        //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         $emailErr = "Invalid email format";
        //     }
        // }

        // if (empty($_POST["website"])) {
        //     $website = "";
        // } else {
        //     $website = test_input($_POST["website"]);
        //     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        //     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        //         $websiteErr = "Invalid URL";
        //     }
        // }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>


    <?php
    //  require '../includes/menu2.php'; 
    require '../includes/header3.php';
    ?>
    <main>
        <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque libero nesciunt molestias. Ipsum, impedit cupiditate? Atque sapiente quia quo, nostrum eaque et distinctio repellendus quae ipsa est repudiandae assumenda, adipisci eligendi, reprehenderit rerum commodi maxime temporibus placeat. Ullam ipsam, aliquam assumenda odio perspiciatis eveniet inventore minus dolore eius totam earum. 
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nesciunt saepe assumenda nostrum et in numquam ad impedit quisquam dolore eligendi, dolores adipisci, blanditiis maiores ipsa dicta eum laborum eius veniam excepturi fugiat possimus sed minima debitis. Pariatur, et! Fugiat dolorem laboriosam iusto praesentium nostrum consequatur aspernatur incidunt. Aut, dolorum quis deserunt non quasi consequuntur labore ut saepe nemo. Tempore magni eligendi, rerum est beatae, quas ratione ut numquam exercitationem ea illo! In saepe, molestias velit qui veritatis quam architecto voluptatem animi voluptatum temporibus ratione consequuntur quidem sequi dolore. Sed libero molestias dolores cum ab facilis corrupti odit veritatis perspiciatis.
-->


        <div class="header1">

            <div class="logo1">
                <span class="logo1__title1">AlchemY</span><span class="logo1__sub-title1"> WEB&nbsp;DESIGNS</span>
            </div>
        </div>

        <div class="contact-container">
            <!-- <br> -->
            <div class="magic-block">
                <?php
                // require '../includes/magic.php';
                ?>
                <!-- <div class="magic1">
                    Put the magic of the web to work.<span class="trademark">&trade;</span>
                </div> -->

            </div>

            <!-- <img src="../images/girl-listening-seashelljpg.jpg" 
            alt="Lucy sitting at desk with mobile phone, pen & notebook plus old-fashioned phone, lamp and bouquet of flowers"
            style="width: 50%; height: auto;"
            > -->

            <div class="copy-block">
                <?php
                require 'content.php';
                ?>

            </div>

            <div class="form-container">
                <!-- <div>
                    We enjoy meeting and working with people who love what they do.
                    <br>
                    <div class="spacer10"></div>
                    Connect with us and together We will create an on line presence that effectively represents your vision.
                </div> -->

                <?php
                // generate a new token for the $_SESSION superglobal and put them in a hidden field
                $newToken = generateFormToken('form1');
                ?>

                <form id="contact-form" action="update.php" class="contactform" method="post" name="contactform">
                    <label for="message">Enter new content for the above block.</label>
                    <!-- <textarea cols="30" maxlength="1000" name="comment" rows="5"></textarea> -->
                    <textarea name="comment" maxlength="1000" rows="5" cols="40"><?php echo $comment; ?></textarea>
                    <br>
                    <!-- <input class="submit" type="submit" value="Submit"> -->
                    <button class="submit" data-callback='onSubmit'>Send</button>
                    <br>
                </form>

            </div>

        </div>
    </main>

    <?php require '../includes/footer1.php' ?>

    <?php

    if ($comment != "") {
        unlink("content.php");
        $comment = html_entity_decode($comment);
        $myfile = fopen("content.php", "w") or die("Unable to open file!");
        fwrite($myfile, $comment);
        fclose($myfile);

        // header("Refresh:0; url=update.php");
        echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function pretty() {
            $("#contact-form").attr("action", "misc.php");
        }
    </script>

    <script>
        document.getElementById("header-image").style.display = "none";
    </script>

</body>

</html>