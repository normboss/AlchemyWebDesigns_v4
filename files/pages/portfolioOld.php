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
    <title>Alchemy Web Design</title>
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
    require '../includes/header1.php';
    $altStyle = 'style="text-align: center; display: block; font-size: 24px; 
                font-style: italic; font-family: Arial; font-weight: normal; text-decoration: none; color: black;"';
    ?>
    <main>

        <div class="portfolio">
            <div class="the-strip">
                <div class="box box1">
                    <div class="box11">Our Work</div>
                    <div class="box12">
                        <!-- <a href="https://www.scottishwroughtiron.com" target="_blank">
                            <img src="../images/AndySparks.png" alt="Blacksmith Andy Leck working with sparks flying." <?php //echo $altStyle 
                                                                                                                        ?> title="Blacksmith Andy Leck working with sparks flying.">

                        </a> -->
                        <img src="../images/AndySparks.png" alt="Blacksmith Andy Leck working with sparks flying." <?php echo $altStyle ?> title="Blacksmith Andy Leck working with sparks flying." onclick="wroughtIronLink()">
                    </div>
                    <div class="box13 box-odd">
                        <a href="https://www.scottishwroughtiron.com" target="_blank">
                            Scottish Lion Wrought Iron
                        </a>
                    </div>
                    <div class="box14 box-even">
                        <a href="https://www.mainevillageweaver.com" target="_blank">
                            <img src="../images/PhyllisWorking.png" alt="Weaver Phyllis Leck working at her loom." <?php echo $altStyle ?>>
                        </a>
                    </div>
                    <div class="box15 box-odd">
                        <a href="https://www.mainevillageweaver.com" target="_blank">
                            Maine Village Weaver
                        </a>
                    </div>
                    <div class="box16 box-even">
                        <a href="http://www.elementalshift.com" target="_blank">
                            <img src="../images/Kirsten.png" alt="Kirsten Jettinghoff mental health counselor." <?php echo $altStyle ?>>
                        </a>
                    </div>
                    <div class="box17 box-odd">
                        <a href="http://www.elementalshift.com" target="_blank">
                            Elemental Shift
                        </a>
                    </div>
                    <div class="box18 box-even">
                        <a href="http://www.sliceocountry.com" target="_blank">
                            <img src="../images/slicecountrypage.png" alt="Sarah Brewer and Slice O Country products." <?php echo $altStyle ?>>
                        </a>
                    </div>
                    <div class="box19 box-odd">
                        <a href="http://www.sliceocountry.com" target="_blank">
                            Slice O' Country
                        </a>
                    </div>
                    <div class="box-even">
                        <a href="http://www.janeherbert.com" target="_blank">
                            <img src="../images/ubiquity_alchemy.png" alt="Sarah Brewer and Slice O Country products." <?php echo $altStyle ?>>
                        </a>
                    </div>
                    <div class="box-odd">
                        <a href="http://www.janeherbert.com" target="_blank">
                            Jane Herbert
                        </a>
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

    <?php require '../includes/footer.php' ?>

    <script>
        function wroughtIronLink() {
            window.open('https://www.scottishwroughtiron.com', '_blank');
        }
    </script>


</body>

</html>