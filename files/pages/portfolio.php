<?php
if (!session_id())
    session_start();
// require '..\includes\root.php';
require __DIR__ . '/../includes/root.php';
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
    // require '../includes/keywords.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/portfolio.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <!--<link rel="icon" href="./images/Image7.gif">-->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <?php
    // require '../includes/headerIndex.php';
    require '../includes/header1.php';

    $altStyle = 'style="text-align: center; display: block; font-size: 24px; 
                font-style: italic; font-family: Arial; font-weight: normal; text-decoration: none; color: black;"';
    ?>
    <main>

        <div class="portfolio">
            <!-- <div class="logo">
                <span class="logo__title">AlchemY</span><span class="logo__sub-title"> WEB&nbsp;DESIGNS</span>
            </div> -->
            <div id="the-strip" class="the-strip">
                <div class="box box1">
                    <div class="box11">Our Work</div>
                    <div class="box12 box13" onclick="wroughtIronLink() ">
                        <img src="../images/AndySparks.png" alt="Blacksmith Andy Leck working with sparks flying." <?php echo $altStyle ?> title="Blacksmith Andy Leck working with sparks flying." onclick="wroughtIronLink()">
                        Scottish Lion Wrought Iron
                    </div>

                    <div class="box14 box15" onclick="maineVillageWeaver()">
                        <img src="../images/PhyllisWorking.png" alt="Weaver Phyllis Leck working at her loom." <?php echo $altStyle ?> title="Weaver Phyllis Leck working at her loom.">
                        Maine Village Weaver
                    </div>

                    <div class="box16 box17" onclick="elementalShift()">
                        <img src="../images/Kirsten_left.png" alt="Kirsten Jettinghoff mental health counselor" <?php echo $altStyle ?> title="Mental health counselor Kirsten Jettinghoff">
                        Elemental Shift
                    </div>

                    <div class="box18 box19" onclick="sliceOCountry()">
                        <img src="../images/slicecountrypage.png" alt="Sarah Brewer and Slice O Country products." <?php echo $altStyle ?> title="Sarah Brewer and Slice O Country products.">
                        Slice O' Country
                    </div>

                    <div class="box-even box-odd" onclick="janeherbert()">
                        <img src="../images/ubiquity_alchemy.png" alt="Jane Herbert painting" <?php echo $altStyle ?> title="Jane Herbert paintings">
                        Jane Herbert
                    </div>

                    <div class="spacer20"></div>
                </div>

                <div class="box box2">
                    <div class="box20">
                        <!-- <?php require '../includes/logo.php';     ?> -->
                    </div>
                    <div class="box21">
                        Testimonial
                    </div>
                    <div class="box22">
                        &quot;<span class="make-bold">Alchemy Web Designs</span>
                        receives five star rating with us for
                        their creative upgrading of our old
                        <span class="wrought-iron">Scottish Lion Wrought Iron</span> and
                        <span class="village-weaver">Maine Village Weaver</span> websites.<br>
                        The company also gets five more stars for the good work after the sites were
                        launched. Solving problems in a timely manor is extremely
                        important to a successful small business and they do it
                        well with such good quality and reasonable price points."
                        <br>
                        <span class="wrought-iron" style="font-weight: bold">Andy Leck, <br>Scottish Lion Wrought Iron</span>
                        <div class="spacer20"></div>
                    </div>
                    <div class="spacer20"></div>
                    <div class="box23">
                        <?php
                        require '../includes/magic.php';
                        ?>
                    </div>
                    <div class="spacer20"></div>
                    <div class="spacer20"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- <?php
            // require '../includes/footer.php' 
            ?> -->

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

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        // gsap.from("#bg", 1, { opacity: 0, delay: 0.5 });
        // gsap.from("#logo", 1, { left: -200, rotation: -90, scale: 0, ease: Back.easeOut, delay: 1.5 });
        gsap.from("the-strip", 3, {
            top: "2000",
            ease: Back.easeOut
        });
        // gsap.from("#content", 0.5, { opacity: 0, top: 100, delay: 3 });
    </script>
</body>

</html>