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
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png"> -->
    <link rel="icon" href="../images/favicon.ico">

</head>

<body>

    <?php
    // require '../includes/headerIndex.php';
    require '../includes/header3.php';
    ?>

    <div id="ufo-block">
        <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
        <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'40px';"> -->
    </div>
    <main>
        <div id="hero-block">
            <!-- <img id="hero-image" src="../images/hero_v4a.jpg"> -->
            <!-- <img src="https://source.unsplash.com/1200x800/?magic" alt=""> -->
        </div>

        <?php
        // require '../includes/logo-a.php';
        ?>


        <div class="logo">
            <span class="logo__title">AlchemY</span><span class="logo__sub-title"> WEB&nbsp;DESIGNS</span>
        </div>

        <?php
        // require '../includes/magic.php';
        ?>

        <div class="magic1">
            Put the magic of the web&nbsp;to&nbsp;work.<span class="trademark">&trade;</span>
        </div>

        <div class="serving1">
            <h3> SERVING MIDCOAST MAINE - AND BEYOND!</h3>
        </div>

    </main>

    <?php
    require '../includes/footer2.php'
    ?>

    <!-- <div id="ufo-block"> -->
    <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
    <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'80px';"> -->
    <!-- </div> -->




    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        // var myVar = setInterval(myTimer, 1000 * 10);

        // function myTimer() {
        //     document.getElementById("hero-image").remove();
        //     document.getElementById("hero-block").innerHTML = '<img id="hero-image" src="https://source.unsplash.com/1600x900/?magic" alt="">';
        // }


        var text = document.getElementsByClassName("logo");
        var magic = document.getElementsByClassName("magic1");
        // text[0].style.opacity = "0";
        // text[0].style.fontSize = "small";

        gsap.from(text[0], 3, {
            opacity: 0,
            scale: ".01",
            ease: "power1.inOut",
            delay: 0
        });
        gsap.from(magic[0], 5, {
            opacity: 0,
            scale: ".01",
            ease: "power1.inOut",
            delay: 1
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
        // var dx = myWidth;
        // var dy = myHeight;
        // var duration = 1;
        // var delayFactor = 5 * duration * 4; //3;

        // for (i = 0; i < 20; i++) {
        //     var x = Math.random() * dx;
        //     x = x % dx;
        //     var y = Math.random() * dy;
        //     y -= dy / 2 + 1;

        //     if (i % 2 === 0) {
        //         x *= -1;
        //     } else {
        //         x += dy;
        //     }
        //     // y = y * 2;
        //     var scale = Math.random() * 5;
        //     // y = (y % dy/2);
        //     // console.log("x=" + x + " y=" + y);
        //     gsap.to("#ufo-block", 2, {
        //         x: x,
        //         y: y,
        //         delay: i * delayFactor / 2,
        //         scale: scale,
        //         ease: "rough({ template: none.out, strength: 1, points: 20, taper: 'none', randomize: true, clamp: false})"
        //     });
        // }
    </script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        function reloadImage() {
            var d = new Date();
            var imageUrl = "https://source.unsplash.com/1200x800/?magic" + d.getTime();
            $("main").css("background-image", "url(" + imageUrl + ")");
        }

        function timer() {
            setInterval(reloadImage, 10000);
        }
        // timer();
    </script>


</body>

</html>