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

    <link href="../css/contact.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            pretty();
            document.getElementById("contact-form").submit();
        }
    </script>

</head>

<body>

    <?php
    require '../includes/header3.php';
    ?>
    <main>
        <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque libero nesciunt molestias. Ipsum, impedit cupiditate? Atque sapiente quia quo, nostrum eaque et distinctio repellendus quae ipsa est repudiandae assumenda, adipisci eligendi, reprehenderit rerum commodi maxime temporibus placeat. Ullam ipsam, aliquam assumenda odio perspiciatis eveniet inventore minus dolore eius totam earum. 
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nesciunt saepe assumenda nostrum et in numquam ad impedit quisquam dolore eligendi, dolores adipisci, blanditiis maiores ipsa dicta eum laborum eius veniam excepturi fugiat possimus sed minima debitis. Pariatur, et! Fugiat dolorem laboriosam iusto praesentium nostrum consequatur aspernatur incidunt. Aut, dolorum quis deserunt non quasi consequuntur labore ut saepe nemo. Tempore magni eligendi, rerum est beatae, quas ratione ut numquam exercitationem ea illo! In saepe, molestias velit qui veritatis quam architecto voluptatem animi voluptatum temporibus ratione consequuntur quidem sequi dolore. Sed libero molestias dolores cum ab facilis corrupti odit veritatis perspiciatis.
-->


        <div class="header1">
            <?php
            require '../includes/logo_a.php';
            ?>
        </div>

        <div class="contact-container">

            <div class="copy-block">
                We’d love to hear from you! Let’s talk about what you’re looking
                for in a website, and how we can help you maximize your message - and your business.
            </div>

            <div class="form-container">
                <?php
                // generate a new token for the $_SESSION superglobal and put them in a hidden field
                $newToken = generateFormToken('form1');
                ?>

                <form id="contact-form" action="thankyou.html" class="contactform" method="post" name="contactform">
                    <label for="name">YOUR NAME</label>
                    <input maxlength="80" name="name" size="30" type="text">
                    <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                    <label for="email">Your Email</label>
                    <input maxlength="80" name="email" size="30" type="text">
                    <label for="message">Leave us a note and we’ll get back to you!</label>
                    <textarea cols="30" maxlength="1000" name="message" rows="5"></textarea><br>
                    <!-- <input class="submit" type="submit" value="Submit »"> -->
                    <button class="g-recaptcha submit" data-sitekey="6Ld82v0UAAAAAIUG_P-YM0zTf9eoRCGEC3WTcf8N" data-callback='onSubmit'>Send</button><br>
                </form>


            </div>

        </div>
    </main>

    <?php require '../includes/footer1.php' ?>


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