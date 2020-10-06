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
    // require '../includes/globalSiteTag.html';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/portfolio3.css" media="screen" rel="stylesheet" type="text/css">
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

    <div id="ufo-block">
        <!-- <img id="ufo" class="ufo" src="../images/night.svg" style="width:'20px';"> -->
        <!-- <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'40px';"> -->
    </div>

    <div class="header1">

        <div class="logo1">
            <span class="logo1__title1">AlchemY</span><span class="logo1__sub-title1"> WEB&nbsp;DESIGNS</span>
        </div>


        <div class="nav">
            <div class="nav__wide">
                <ul>
                    <li class="menu-item">serving midcoast maine - and beyond!</li>
                    <li class="menu-item"><a href="home.php">Home</a></li>
                    <li class="menu-item"><a href="portfolio3.php">Portfolio</a></li>
                    <li class="menu-item"><a href="about3.php">About</a></li>
                    <li class="menu-item"><a href="contact.php" target="_blank">Contact</a></li>
                </ul>
            </div>

            <div class="nav__narrow">
                <div class="menu-item">serving midcoast maine - and beyond!</div>
                <ul>
                    <!-- <li class="dropdown"> -->
                    <a href="javascript:void(0)" class="dropbtn">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </a>
                    <!-- <div class="dropdown-content">
                            <a href="home.php">Home</a>
                            <a href="portfolio3.php">Portfolio</a>
                            <a href="about3.php">About</a>
                            <a href="contact.php" target="_blank">Contact</a>
                        </div> -->
                    <!-- </li> -->
                </ul>

            </div>
        </div>

    </div>

    <main>
        <div id="hero-block">
            <!-- <img id="hero-image" src="../images/hero_v4a.jpg"> -->
            <!-- <img src="https://source.unsplash.com/1200x800/?magic" alt=""> -->
        </div>

        <!-- <?php
                // require '../includes/logo.php';
                ?> -->


        <!-- <div class="row1"></div> -->
        <div class="content">


        </div>

        <div class="magic1">
            Put the magic of the web to work.<span class="trademark">&trade;</span>
        </div>

    </main>

    <!-- <?php
            // require '../includes/footer.php' 
            ?> -->

    <div id="ufo-block">
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

        // gsap.from(text[0], 3, {
        //     opacity: 0,
        //     scale: ".01",
        //     ease: "power1.inOut",
        //     delay: 0
        // });
        // gsap.from(magic[0], 5, {
        //     opacity: 0,
        //     scale: ".01",
        //     ease: "power1.inOut",
        //     delay: 1
        // });

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
            // console.log("x=" + x + " y=" + y);
            gsap.to("#ufo-block", 2, {
                x: x,
                y: y,
                delay: i * delayFactor / 2,
                scale: scale,
                ease: "rough({ template: none.out, strength: 1, points: 20, taper: 'none', randomize: true, clamp: false})"
            });
        }
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
    <script>
        function wroughtIronLink() {
            window.open('https://www.scottishwroughtiron.com', '_blank');
        }

        function maineVillageWeaver() {
            window.open('https://www.mainevillageweaver.com', '_blank');
        }

        function elementalShift() {
            window.open('http://www.elementalshift.com', '_blank');
        }

        function sliceOCountry() {
            window.open('https://www.sliceocountry.com', '_blank');
        }

        function janeherbert() {
            window.open('https://www.janeherbert.com', '_blank');
        }
    </script>

    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script> -->
    <script>
        // gsap.from("#bg", 1, { opacity: 0, delay: 0.5 });
        // gsap.from("#logo", 1, { left: -200, rotation: -90, scale: 0, ease: Back.easeOut, delay: 1.5 });
        // gsap.from("the-strip", 3, {
        //     top: "2000",
        //     ease: Back.easeOut
        // });
        // gsap.from("#content", 0.5, { opacity: 0, top: 100, delay: 3 });
    </script>


</body>

</html>