<?php
if (!session_id())
    session_start();
$_SESSION['pagenumber'] = "0";
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    require 'files/includes/globalSiteTag.html';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <style>
        a {
            color: #ddd;
        }
    </style>
</head>
<body>
    <a href="./files/pages/home.php">Click to enter</a>

    <script>

    window.location.href = "./files/pages/home.php";
    </script>
</body>
</html>
