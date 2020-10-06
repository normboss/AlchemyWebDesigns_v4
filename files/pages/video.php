<?php
if (!session_id())
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alchemy Web Design</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./files/css/video.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link href=".files/fonts/Wizards Magic.ttf" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Allura|Dancing+Script|Zeyada" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="./files/images/favicon-16x16.png">
</head>

<body>
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <!-- <source src="https://youtu.be/LAeG0emjC0w" type="video/mp4"> -->
    </video>
        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/LAeG0emjC0w?controls=0?&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <iframe width="1000" height="600" class="video-iframe" src="https://www.youtube.com/embed/LAeG0emjC0w?controls=0?&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!-- Optional: some overlay text to describe the video -->
    <div class="content">
        <h1>Heading</h1>
        <p>Lorem ipsum...</p>
        <!-- Use a button to pause/play the video with JavaScript -->
        <button id="myBtn" onclick="myFunction()">Pause</button>
    </div>
</body>

</html>