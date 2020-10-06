<!DOCTYPE html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$loggedIn = false;


if (isset($_SESSION['alchemyloggedin']) && $_SESSION['alchemyloggedin'] == 'yes')
{
    $loggedIn = false;
}
echo "<h1>Status = " . $loggedIn . "</h1><br>";
?>
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

        <link href="./css/index.css" media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <!--<link href="./fonts/Wizards Magic.ttf" rel="stylesheet">-->
        <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
        <!--<link rel="icon" href="./images/Image7.gif">-->
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">

    </head>
    <body>

<?php echo "<h1>Status = " . $loggedIn . "</h1><br>"; ?>

        <header>
            <nav>

                <span class="menu-item"><a href="index.php">Home</a></span>
                <div class="dropdown">
                    <span class="menu-item"><a href="index.php">Art</a></span>
                    <div class="dropdown-content">
                        <a href="https://www.janeherbert.com"><span class="dropdown-item">Jane Herbert Paintings</span></a>
                    </div>
                </div> 
                <div class="dropdown">
                    <span class="menu-item"><a href="index.php">Portfolio</a></span>
                    <div class="dropdown-content">
                        <a href="https://www.mainevillageweaver.com"><span class="dropdown-item">Maine Village Weaver</span></a>
                        <a href="https://www.scottishwroughtiron.com/"><span class="dropdown-item">Scottish Lion Wrought Iron</span></a>
                        <!--<a href="kayaking.html"><span class="dropdown-item">Norm Kayaking</span></a>-->
                    </div>
                </div> 
                <span class="menu-item"><a href="contact.html" target="_blank">Contact</a></span>

                <?php
                if (!$loggedIn)
                {
                    echo '<span class="menu-item"><a href="login.php">Login</a></span>';
                } else
                {
//                echo '<span class="menu-item"><a href="login.php">Login</a></span>';
                    echo '<div class="dropdown">';
                    echo '<span class="menu-item"><a href="index.php">Test</a></span>';
                    echo '<div class="dropdown-content">';
                    echo '<a href="https://www.AlchemyWebDesigns.com/VillageWeaverX"><span class="dropdown-item">Maine Village Weaver</span></a>';
                    echo '<a href="https://www.AlchemyWebDesigns.com/ScottishLion"><span class="dropdown-item">Scottish Lion Wrought Iron</span></a>';
                    echo '<a href="https://www.AlchemyWebDesigns.com/ElementalShift"><span class="dropdown-item">Elemental Shift</span></a>';
                    echo '</div>';
                    echo '</div> ';
                    echo '<div class="dropdown">';
                    echo '<span class="menu-item"><a href="index.php">Misc</a></span>';
                    echo '<div class="dropdown-content">';
                    echo '<a href="./3D/index.php"><span class="dropdown-item">3D Gaphics</span></a>';
                    echo '<a href="overlap.html"><span class="dropdown-item">Overlapping Images</span></a>';
                    echo '</div>';
                    echo '</div> ';
                }
                ?>
            </nav>
        </header>
        <br><br><br>
        <div class="banner">
            <div class="spacer10"></div>
            <div class="text">
                <span class="large-text">
        <!--          <span class="char1">A</span> 
                  <span class="char2">l</span>
                  <span class="char3">c</span>
                  <span class="char4">h</span>
                  <span class="char5">e</span>
                  <span class="char6">m</span>
                  <span class="char7">y</span>-->
                    Alchemy Web Designs
                </span>
                <span class="under-construction">Under Construction</span>
                <!--<span class="small-text">Web Design</span>-->
            </div>

            <div class="spacer10"></div>

<!--<img src="./images/transformation.jpg">-->
<!--<img src="./images/Flammarion_Colored2.jpg">-->
        </div>
    </body>

</html>
