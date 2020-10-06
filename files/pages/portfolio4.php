<?php
if (!session_id())
    session_start();
// require __DIR__ . '/files/includes/root.php';
$_SESSION['pagename'] = "portfolio";
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

    <link href="../css/portfolio4.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    // require '../includes/headerIndex.php';
    require '../includes/header3.php';
    ?>

    <!-- <div id="ufo-block">
        <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'40px';">
    </div> -->

    <div class="header1">

        <div class="logo1">
            <span class="logo1__title1">AlchemY</span><span class="logo1__sub-title1"> WEB&nbsp;DESIGNS</span>
        </div>


        <!-- <div class="nav">
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
                    <a href="javascript:void(0)" class="dropbtn">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </a>
                </ul>

            </div>
        </div> -->

    </div>
    <?php
    // require '../includes/headerIndex.php';
    // require '../includes/header1.php';
    ?>

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

            <div id="client1" class="client" onclick="wroughtIronLink()">
                <img src="../images/andy_ladder2.png" alt="" title="www.ScottishWroughtIron.com">
                <div class="copy">
                    &ldquo;Alchemy receives a 5-star<br>
                    rating for their creative<br>
                    redesign of my old site<br>
                    and for increasing<br>
                    my sales!&rdquo;<br>
                    <div class="author">Andy, Owner<br> Scottish Wrought Iron</div>
                </div>
            </div>
            <div id="copy1" class="client-copy">
                <!-- &ldquo;My sales increased exponentially with the new website.&rdquo;<br> -->

                &ldquo;Alchemy receives a 5-star
                rating for their creative
                redesign of my old site
                and for increasing
                my sales!&rdquo;

                <div class="author">Andy, Owner Scottish Wrought Iron</div>
            </div>

            <div id="client3" class="client" onclick="sliceOCountry()">
                <img src="../images/SarharWithBackground.png" alt="" title="www.SliceOCountry.com">
                <div class="copy">
                    &ldquo;Great to work with,<br>
                    and eager to support<br>
                    my business as I<br>
                    expand reaching<br>
                    new heights with<br>
                    their support.&rdquo;
                    <div class="author">Sarah, Owner A <br>Slice of Country</div>
                </div>
            </div>
            <div id="copy1" class="client-copy">
                &ldquo;Great to work with, and eager to support my business as I 
                expand reaching new heights with their support.&rdquo;
                <div class="author">Sarah, Owner A Slice of Country</div>
            </div>

            <div id="client2" class="client" onclick="elementalShift()">
                <img src="../images/Kirsten_left1@2x.png" alt="" title="www.ElementalShift.com">
                <div class="copy">
                    &ldquo;My website has provided<br>
                    a wonderful opportunity<br>
                    for my ideal clients to get<br>
                    to know me…to get clear<br>
                    about what they want,<br>
                    and to take that next step<br>
                    in reaching out for help.&rdquo;
                    <div class="author">Kirsten, Owner<br> Elemental Shift</div>
                </div>
            </div>
            <div id="copy1" class="client-copy">
                &ldquo;My website has provided a wonderful opportunity
                for my ideal clients to get to know me…to get clear
                about what they want, and to take that next step
                in reaching out for help.&rdquo;
                <div class="author">Kirsten, Owner Elemental Shift</div>
            </div>

            <div id="client4" class="client" onclick="maineVillageWeaver()">
                <img src="../images/PhyllisSmiling.png" alt="" title="www.MaineVillageWeaver.com">
                <div class="copy">
                    &ldquo;Weaving is my passion.<br>
                    It’s wonderful to share it<br>
                     with so many folks on my<br>
                    new website.&rdquo;
                    <div class="author">Phyllis, Owner<br> Maine Village Weaver</div>
                </div>
            </div>
            <div id="copy1" class="client-copy">
                &ldquo;Weaving is my passion. It’s wonderful to share it with so many fans online.&rdquo;
                <div class="author">Phyllis, Owner Maine Village Weaver</div>
            </div>

        </div>

        <!-- <div class="magic1">
            Put the magic of the web&nbsp;to&nbsp;work.<span class="trademark">&trade;</span>
        </div> -->

    </main>

    <?php
    require '../includes/footer1.php'
    ?>

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
        var delayFactor = 5 * duration * 4; //3;

        // for (i = 0; i < 5; i++) {
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
        // $("ufo-block").hide();
    </script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <!-- <script>
        function reloadImage() {
            var d = new Date();
            var imageUrl = "https://source.unsplash.com/1200x800/?magic" + d.getTime();
            $("main").css("background-image", "url(" + imageUrl + ")");
        }

        function timer() {
            setInterval(reloadImage, 10000);
        }
        // timer();
    </script> -->
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