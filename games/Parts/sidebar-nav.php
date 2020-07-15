<?php

    $rootDirectory = "/superbuggames";

    echo <<< SIDENAV
    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <a href="$rootDirectory" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <img src="$rootDirectory/games/images/logos/SoulEmergentLogo_236x247.png" style="width:50%">
        </a>
        <a href="$rootDirectory/games/soul-emergent.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="$rootDirectory/games/pages/intro.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>INTRO</p>
        </a>
        <a href="$rootDirectory/games/pages/chapter_one.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>CHAPTER ONE</p>
        </a>
        <a href="$rootDirectory/games/pages/chapter_two.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>CHAPTER TWO</p>
        </a>
        <a href="$rootDirectory/games/pages/tutorial.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>TUTORIAL</p>
        </a>
        <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>CONTACT</p>
    </a> -->
    </nav>
    SIDENAV;
?>