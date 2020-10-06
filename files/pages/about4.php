<?php
if (!session_id())
    session_start();
// require __DIR__ . '/files/includes/root.php';
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/about4.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    require '../includes/header3.php';
    ?>

    <main>

        <!-- <?php
                // require '../includes/logo.php';
                ?> -->


        <div class="logo1">
            <span class="logo1__title1">AlchemY</span><span class="logo1__sub-title1"> WEB&nbsp;DESIGNS</span>
        </div>

        <!-- <div class="row1"></div> -->


        <div class="content">
            <ul class="upper-content">
                <li>Unsure how to go about creating your first website?</li>
                <li>Getting complaints
                    that your current website doesn’t work on an iPhone?</li>
                <li>Receiving few if
                    any responses from potential customers?</li>
            </ul>

            <div class="lower-content">
                With a diverse number of skill sets acquired over many years in our
                professions, we offer a collaborative approach to building websites.
                Whether you need to start out with a new site, refresh an older tired one,
                branch out into a modern responsive website and/or utilize innovative
                new search techniques, we can help you achieve the website and business
                responses you’re looking for!
            </div>
        </div>

        <div class="the-staff">
            <div id="member1" class="staff-member">
                <img class="picture" src="../images/jane_face.png"></img>
                <div class="text">
                    <h2>Jane Herbert</h2>
                    <p>
                        An accomplished fine artist well-known in MidCoast Maine,
                        Jane can help clarify your needs and skillfully guide you through design,
                        branding and implementation.
                    </p>
                </div>
            </div>
            <div id="member2" class="staff-member">
                <img class="picture" src="../images/Norm5.png"></img>
                <div class="text">
                    <h2>Norm Bosse</h2>
                    <p>A software developer with over 30 years experience,
                        Norm excels at technical expertise. He’ll bring your
                        website to life, functioning well no matter what the device.</p>
                </div>
            </div>
            <div id="member3" class="staff-member">
                <img class="picture" src="../images/Ann.png"></img>
                <div class="text">
                    <h2>Ann Bosse</h2>
                    <p>With over 30 years of experience as an art director &
                        designer, Ann has a wealth of knowledge in the advertising
                        field including design, copy and production.</p>
                </div>
            </div>
            <br><br><br>

        </div>

        <!-- <div class="magic1">
            Put the magic of the web to work.<span class="trademark">&trade;</span>
        </div>

        <div class="serving1">
            <h3> SERVING MIDCOAST MAINE - AND BEYOND!</h3>
        </div> -->


    </main>

    <div class="about-footer">
        <!-- <div class="magic2">
            Put the magic of the web&nbsp;to&nbsp;work.<span class="trademark">&trade;</span>
        </div> -->

        <?php
        require '../includes/footer1.php'
        ?>
    </div>


    <!-- <div id="ufo-block">
        <img id="ufo" class="ufo" src="../images/flyingsaucer.svg" style="width:'80px';"> 
    </div> -->




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
        // var dx = myWidth;
        // var dy = myHeight;
        // var duration = 1;
        // var delayFactor = 5 * duration * 4; //3;

        // for (i = 0; i < 50; i++) {
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
        //     console.log("x=" + x + " y=" + y);
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