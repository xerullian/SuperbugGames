<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- css -->
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&display=swap">
</head>

<body class="w3-black">

    <!-- BEGIN sidebar-nav.php INCLUDE -->
    <?php include 'parts/sidebar-nav.php';?>
    <!-- END sidebar-nav.php INCLUDE -->

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#intro" class="w3-bar-item w3-button" style="width:25% !important">INTRO</a>
            <a href="#whatdoes" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <!-- Page content -->
    <div class="w3-padding-small" id="main">

            <!-- Header/Home -->
            <header class="w3-container w3-padding-32 w3-center w3-transparent" id="home">
                <img src="images/logos/SoulEmergentLogo_236x247.png" alt="logo" class="w3-image" width="236" height="247"
                    style="width: 8%; height: auto;">
                <h1 class="w3-jumbo"><span class="w3-hide-small"></span> SOUL:Emergent</h1>
                <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Gameplay Manual</h1>
                <p>By Patrick Nolen</p>
            </header>

            <div class="w3-center">
                <a href="pages/intro.php" class="w3-bar-item w3-button w3-padding-large">
                    <i class="fa fa-arrow-right w3-xxlarge" style="color:white"></i>
                    <p>Intro</p>
                </a>
            </div>

        <!-- Footer -->
        <footer class="w3-content w3-center w3-padding-32  w3-xlarge">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p class="w3-medium">All rights reserved.</p>
            <p class="w3-medium">Powered by
                <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css
                </a>
            </p>
        </footer>
        <!-- End footer -->

    </div>
    <!-- END PAGE CONTENT -->

</body>
</html>