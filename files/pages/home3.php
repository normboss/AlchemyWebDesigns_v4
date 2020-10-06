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

    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    require '../includes/headerIndex.php';
    // require '../includes/header1.php';
    ?>

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

    <div id="ufo-block">
        <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
        <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'40px';"> -->
    </div>
    <main>
        <div id="hero-block">
            <!-- <img id="hero-image" src="../images/hero_v4a.jpg"> -->
            <!-- <img src="https://source.unsplash.com/1200x800/?magic" alt=""> -->
        </div>
        <?php require '../includes/logo.php';     ?>
        <?php
        // require '../includes/magic.php';
        ?>

        <div class="magic1">
            Put the magic of the web to work.<span class="trademark">&trade;</span>
        </div>

        <div class="serving1">
            <h3> SERVING MIDCOAST MAINE - AND BEYOND!</h3>
        </div>

    </main>

    <!-- <?php
            // require '../includes/footer.php' 
            ?> -->

    <div id="ufo-block">
        <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
        <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'80px';">
    </div>




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
            var scale = Math.random() * 5;
            // y = (y % dy/2);
            console.log("x=" + x + " y=" + y);
            gsap.to("#ufo-block", 2, {
                x: x,
                y: y,
                delay: i * delayFactor / 2,
                scale: scale,
                ease: "rough({ template: none.out, strength: 1, points: 20, taper: 'none', randomize: true, clamp: false})"
            });
        }

        // var x, y, i, j;
        // for (i = 0; i < 50; i++) {
        //     for (j = 0; j < 8; j++) {
        //         switch (j) {
        //             case 0:
        //                 x = 0;
        //                 y = -100;
        //                 break;
        //             case 1:
        //                 x = vw;
        //                 y = vh + 100;
        //                 break;
        //             case 2:
        //                 x = -100;
        //                 y = 2 * vh / 3;
        //                 break;
        //             case 3:
        //                 x = 2 * vw / 3;
        //                 y = -100;
        //                 break;
        //             case 4:
        //                 x = vw / 3;
        //                 y = vh + 100;
        //                 break;
        //             case 5:
        //                 x = vw + 100;
        //                 y = vh / 2;
        //                 break;
        //             case 6:
        //                 x = vw - 100;
        //                 y = vh / 3;
        //                 break;
        //             case 7:
        //                 x = vw + 100;
        //                 y = vh * 2 / 3;
        //                 break;
        //         }
        //         x = x.toFixed(0);
        //         y = y.toFixed(0);
        //         console.log("i="+i+" j="+j+" x="+x+" y="+y);
        //         gsap.to("#ufo-block", 1, {
        //             x: x,
        //             y: y,
        //             delay: 2,
        //             ease: "rough({ template: none.out, strength: 1, points: 20, taper: 'none', randomize: true, clamp: false})"
        //         });
        //         // break;
        //     }
        //     // break;
        // }



        // gsap.to(text[0], 5, {
        //     opacity: 1,
        //     scale: "1",
        //     ease: "power1.inOut",
        //     delay: 1
        // });
        // gsap.to(text[0], 0.25, { rotation: -10, ease: Back.easeOut, delay: 5.5 });
        // gsap.to(text[0], 0.25, { rotation: 10, ease: Back.easeOut, delay: 5.75 });
        // gsap.to(text[0], 0.25, { rotation: 0, ease: Back.easeOut, delay: 6 });

        // gsap.from("#logo", 1, { left: -200, rotation: -90, scale: 0, ease: Back.easeOut, delay: 1.5 });
        // gsap.from("#address", 1, { left: "+=100", opacity: 0, ease: Back.easeOut, delay: 2.0 });
        // gsap.from("#content", 0.5, { opacity: 0, top: 100, delay: 3 });


        // $('#click-me').on('click', () => {
        //     $('.logo').toggle();
        //     // $('.logo').fadeOut();
        // });
    </script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>

        function reloadImage() {
            var d = new Date();
            var imageUrl = "https://source.unsplash.com/1200x800/?magic"+d.getTime();
            $("main").css("background-image", "url(" + imageUrl + ")"); 
        }

        function timer() {
            setInterval(reloadImage, 10000);
        }
        timer();
    </script>


</body>

</html>