<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperBugGames</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <!-- BEGIN top-nav.php INCLUDE -->
    <?php include 'parts/top-nav.php';?>
    <!-- END top-nav.php INCLUDE -->

    <!-- Header with image -->
    <header class="w3-container w3-center" id="home">
        <img id="logo" src="images/logo/SuperBugGamesLogo_Magenta_WhiteDrop_1414x208.png" alt="SuperbugGamesLogo"
                width="707" height="104" style="margin-top: 80px; margin-bottom: 20px">
    </header>

    <div class="w3-container" style="padding-bottom: 32px;">

        <div class="w3-container" id="Games">
            <div class="w3-content" style="max-width: 700px;">
                <h5 style="padding-top: 8px; padding-bottom: 0px;" class="w3-center">
                    <span class="w3-wide">GAMES</span>
                </h5>

                <a href="games/soul-emergent.php">
                    <img src="images/games/ditaDuck_placdeHolder_960x515.jpg" alt="SoulEmergentScreenCapture"
                    class="game_img w3-margin-top" >
                </a>

            </div> <!-- end content -->
        </div> <!-- end container -->

    </div> <!-- end page content -->

    <?php include 'parts/footer.php';?>

</body>
</html>