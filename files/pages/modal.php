<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/modal.css" media="screen" rel="stylesheet" type="text/css">

<title>Modal</title>

<head>
</head>

<body>

    <h2>Image Modal</h2>
    <p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
    <p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>
    <p>Don't worry if you do not understand the code right away. When you are done with CSS, go to our JavaScript Tutorial to learn more.</p>

    <img id="myImg" src="../images/img_lights.jpg" alt="Northern Lights, Norway" width="300" height="200">

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

</body>

</html>