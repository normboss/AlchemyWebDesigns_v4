<?php
if (!session_id())
    session_start();
// require '..\includes\root.php';
require __DIR__ . '/../includes/root.php';
$_SESSION['pagename'] = "about";
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php
    // require '../includes/globalSiteTag.html';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/about.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

    <script>
        function normEmailFunction() {
            var email = document.getElementById("norm-email-input");
            emailFunction(email);
        }

        function janeEmailFunction() {
            var email = document.getElementById("jane-email-input");
            emailFunction(email);
        }

        function emailFunction(node) {
            node.select();
            node.setSelectionRange(0, 99999)
            document.execCommand("copy");
            // alert("Email copied to clipboard" + email.value);
            alert("Email copied to clipboard");
        }
    </script>

</head>

<body>

    <?php
    require '../includes/header1.php';
    $altStyle = 'style="text-align: center; display: block; font-size: 24px; 
                font-style: italic; font-family: Arial; font-weight: normal; text-decoration: none; color: black;"';
    ?>
    <main>

        <div class="about">
            <div class="box box1">
                <div class="spacer20"></div>
                <div class="spacer20"></div>
                <div class="heading">
                    What we do
                </div>
                <div class="spacer20"></div>
                <div class="text">
                    We offer custom tailored web sites for small businesses in&nbsp;mid&#8209;coast&nbsp;Maine.
                    Our small size and local focus allows us to give personal attention to every client.
                    After a site is up and running we maintain it with product updates
                    and&nbsp;changed&nbsp;information.<br>
                    We are available to listen and respond&nbsp;effectively.
                </div>
            </div>
            <div class="box box3">
                <!-- Put the Magic of the&nbsp;web to&nbsp;work
                <div class="spacer20"></div>
                Contact Us. -->
                <?php
                require '../includes/magic.php';
                ?>
            </div>
            <div class="box box4">
                Who we are
            </div>
            <div class="box box5">
                <div class="box box52">
                    <img class="jane-image" src="../images/jane.png" alt="Jane Herbert artist and web designer." <?php echo $altStyle ?>>
                </div>
                <div class="box box51">
                    <h2>Jane Herbert</h2>
                    is a talented artist who lives in Damariscotta. If you want a custom
                    website or just fix up the visual presentation of what you already have,
                    Jane is the person to help you clarify your message and branding to attract
                    attention.
                    <!-- <a href="mailto:Jane@AchemyWebDesigns.com">Email</a> -->
                    <!-- <input type="text" value="Jane@AchemyWebDesigns.com" id="jane-email-input"> -->
                    <!-- <button class="email-btn" onclick="janeEmailFunction()" title="Copy email to clipboard.">Email</button> -->
                    <div class="spacer20"></div>
                </div>
                <div class="box box52">
                    <!-- <img class="norm-image" src="../images/Norm5a.jpg" alt="Norm Bosse web developer." <?php echo $altStyle ?>> -->
                    <img class="norm-image" src="../images/WiringTrailerCloseup1.jpg" style="width: 125px;" alt="Norm Bosse web developer." <?php echo $altStyle ?>>
                </div>
                <div class="box box51">
                    <h2>Norm Bosse</h2>
                    is a software developer with over 30 years experience. Norm translates Jane's
                    designs into code, ensuring that the websites perform well on all devices.
                    Norm lives in East Boothbay.
                    <!-- worked for 35 years as software engineer and handles the actual
                    construction of the Alchemy Web Designs for our customers.
                    This includes adding things like shopping carts, making sure the
                    website works well on mobile devices and any custom programming. -->
                    <!-- <a href="mailto:Norm@AchemyWebDesigns.com">Email</a> -->
                    <!-- <input type="text" value="Norm@AchemyWebDesigns.com" id="norm-email-input"> -->
                    <!-- <button class="email-btn" onclick="normEmailFunction()" title="Copy email to clipboard.">Email</button> -->
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php require '../includes/footer.php' ?>

</body>

</html>