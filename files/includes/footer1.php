        <footer id="footer1" class="foot1">

            <div class="magic3">
                <!-- <img src="../images/tinkerbell.png" alt=""> -->
                Put the magic of the web&nbsp;to&nbsp;work.
                <span class="trademark3">&trade;</span>
            </div>

            <div class="url-text">
                <a href="https://www.alchemywebdesigns.com">
                    WWW.ALCHEMYWEBDESIGNS.COM
                </a>
            </div>

            <div class="footer-block">
                <a class="contact-us" href="contact.php">
                    CONTACT US
                </a>

                <div class="copyright">
                    copyright Alchemy Web Designs 2020
                </div>
            </div>

            <!-- <div class="foot__text">
                Serving&nbsp;Mid&#8209;Coast&nbsp;Maine
            </div> -->
            <!-- <div class="foot__text">
                <a href="mailto:info@alchemywebdesigns.com">info@alchemywebdesigns.com</a><br>
            </div> -->
            <!-- <div class="foot__text">
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
            </div> -->
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>

        <!-- add your own script -->
        <script>
            var text = document.getElementsByClassName("logo");

            // gsap.to(text[0], {
            //     // rotation: 360,
            //     duration: 5,
            //     // x: 0,
            //     // y: 500,
            //     // delay: 1,
            //     opacity: "1",
            //     // scale: "1.5"
            // });
        </script>


        <script>
            var foot = document.getElementById("footer");
            var logo = document.getElementById("small-logo-id");
            // var pagename = <?php //echo '"' . $_SESSION['pagename'] . '"'; 
                                ?>;

            var pagename = "<?php echo $_SESSION['pagename'] ?>";
            if (pagename == 'contact') {
                foot.style.backgroundColor = '#A8985F';
                logo.style.backgroundColor = '#A8985F';
            } else if (pagename == 'about') {
                foot.style.backgroundColor = '#454F52';
                logo.style.backgroundColor = '#454F52';
            } else if (pagename == 'thankyou') {
                foot.style.backgroundColor = '#273F4B';
                logo.style.backgroundColor = '#273F4B';
            } else if (pagename == 'portfolio') {
                foot.style.backgroundColor = '#638991';
                logo.style.backgroundColor = '#638991';
            } else {
                foot.style.backgroundColor = '#9da5b2';
            }
        </script>