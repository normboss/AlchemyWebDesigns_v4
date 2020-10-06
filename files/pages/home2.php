<?php
if (!session_id())
    session_start();
// require __DIR__ . '/files/includes/root.php';
$_SESSION['pagename'] = "index";
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
    require '../includes/globalSiteTag.html';
    require '../includes/keywords.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/home2.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    // require '../includes/headerIndex.php';
    // require '../includes/header1.php';
    ?>

    <div class="container">
        <div id="ufo-block">
            <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
            <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'40px';"> -->
            
            <!-- <img id="ufo" class="ufo" src="../images/wizard-5.svg"> -->
        </div>

        <!-- <img class="image-1" src="../images/hero_v4a.jpg"> -->
        <!-- <img class="image-2" src="../img/hero768.png">
        <img class="image-3" src="../img/hero_v4a.jpg"> -->

        <div class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">PORTFOLIO</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>

        </div>
        <div class="menu-mobile">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
        </div>
        <!-- <div class="menu-btn">
            <i class="fas fa-bars fa-2x"></i>
        </div> -->

        <div class="content">
            <div class="logo">
                <span class="logo__title">AlchemY</span><span class="logo__sub-title"> WEB&nbsp;DESIGNS</span>
            </div>
            <div class="magic1">
                Put the magic of the&nbsp;web to&nbsp;work.<span class="trademark1">&trade;</span>
            </div>
            <div class="serving">
                <h3> SERVING MIDCOAST MAINE - AND BEYOND!</h3>
            </div>
        </div>

    </div>

    <!-- <header class="header">
        <div class="header-text">
            <a href="home.php">HOME</a>
        </div>
        <div class="header-text">
            <a href="home.php">PORTFOLIO</a>
        </div>
        <div class="header-text">
            <a href="about.php">ABOUT</a>
        </div>
        <div class="header-text">
            <a href="contact.php" target="_blank">CONTACT</a>
        </div>
    </header> -->


    <main>
        <img src="../images/hero_v4a.jpg">
        <?php require '../includes/logo.php';     ?>
        <?php
        require '../includes/magic.php';
        ?>

        <div class="serving">
            <h3> SERVING MIDCOAST MAINE - AND BEYOND!</h3>
        </div>

    </main>

    <!-- <?php
            // require '../includes/footer.php' 
            ?> -->

    <div id="ufo-block">
        <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
        <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'80px';"> -->
    </div>




    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        var text = document.getElementsByClassName("logo");
        var magic = document.getElementsByClassName("magic1");
        // text[0].style.opacity = "0";
        // text[0].style.fontSize = "small";

        gsap.from(text[0], 3, {
            opacity: 0,
            scale: ".01",
            ease: "power1.inOut",
            delay: 1
        });
        gsap.from(magic[0], 5, {
            opacity: 0,
            scale: ".01",
            ease: "power1.inOut",
            delay: 2
        });

        var myWidth = 0,
            myHeight = 0;
        if (typeof(window.innerWidth) == 'number') {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }

        var vw = 500; //myWidth;
        var vh = 500; //myHeight;
        var dx = myWidth;
        var dy = myHeight;
        var duration = 1;
        var delayFactor = 5 * duration * 2; //3;

        for (i = 0; i < 50; i++) {
            var x = Math.random() * dx;
            x = x % dx;
            var y = Math.random() * dy;
            y -= dy / 2 + 1;

            if (i % 2 === 0) {
                x *= -1;
            } else {
                x += dy;
            }
            // y = y * 2;
            var scale = Math.random() * 10;
            // y = (y % dy/2);
            console.log("x=" + x + " y=" + y);
            // gsap.to("#ufo-block", 5, {
            //     x: x,
            //     y: y,
            //     delay: i * delayFactor / 2,
            //     scale: scale,
            //     ease: "rough({ template: none.out, strength: 1, points: 20, taper: 'none', randomize: true, clamp: false})"
            // });
        }

    </script>

    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script> -->
    <script>
    </script>


</body>

</html>