    <header class="header-index">
    <?php
        if ( $_SESSION['pagename'] != "index" )
            require 'header-logo.php';
        ?>

        <div class="nav-index">
            <div class="nav-index__wide">
                <ul>
                    <span class="menu-item"><a href="home.php">Home</a></span>
                    <span class="menu-item"><a href="portfolio3.php">Portfolio</a></span>
                    <span class="menu-item"><a href="about3.php">About</a></span>
                    <span class="menu-item"><a href="contact.php" target="_blank">Contact</a></span>
                </ul>
            </div>

            <div class="nav-index__narrow">
                <ul>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">
                            <div class="hamburger"></div>
                            <div class="hamburger"></div>
                            <div class="hamburger"></div>
                        </a>
                        <div class="dropdown-content">
                            <a href="home.php"">Home</a>
                            <a href="portfolio3.php">Portfolio</a>
                            <a href="about3.php">About</a>
                            <a href="contact.php" target="_blank">Contact</a>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </header>