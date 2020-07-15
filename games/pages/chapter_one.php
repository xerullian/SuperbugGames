<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter one</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&display=swap">
</head>

<body class="w3-black">

    <!-- BEGIN sidebar-nav.php INCLUDE -->
    <?php include '../parts/sidebar-nav.php';?>
    <!-- END sidebar-nav.php INCLUDE -->

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#intro" class="w3-bar-item w3-button" style="width:25% !important">INTRO</a>
            <a href="../Parts/chapter_one.html" class="w3-bar-item w3-button" style="width:25% !important">CHAPTER ONE</a>
            <a href="../Parts/chapter_two.html" class="w3-bar-item w3-button" style="width:25% !important">CHAPTER TWO</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-small" id="main">

        <!-- Header/Home -->

        <div class="w3-container w3-padding-32 w3-center w3-transparent" id="home">
            <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Getting Started</h1>
            <p>By Patrick Nolen</p>
        </div>

        <!-- Paragraph Links -->
        <div class="w3-content w3-center  w3-padding-8" id="chapter_links">
            <h3 class="chapter_links">Chapter One Links</h3>
            <hr style="width:200px" class="w3-auto w3-opacity">
            <ol style="list-style-position: inside;" class="w3-ol w3-container w3-auto">
                <li><a href="#intro">Defining The Game</a></li>
                <li><a href="#whatdoes">What does SOUL stand for?</a></li>
                <li><a href="#mechanics">Understanding the parts of SOUL – SOUL Mechanics</a></li>
                <li><a href="#emergent">What does Emergent mean?</a></li>
                <li><a href="#parts">Parts of The Game</a></li>
                <li><a href="#tutorial">Tutorial – Repairing a sector</a></li>
                <li><a href="#conclusion">What you have learned</a></li>
            </ol>
        </div>

        <!-- Intro -->
        <div class="w3-content w3-justify  w3-padding-16" id="intro">
            <h2 class="">Introduction</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                SOUL : Emergent marks the beginning of a world and the turmoil’s faced by evolving lifeforms. You’ll play a hand in how
                this evolution occurs. You’ll make choices. Some of these entities might listen. Some might not. Some of those choices
                might lead to a quick death and an extinction of a species. Other choices may lead to an exceptionally intelligent and
                parasitic organism that overruns the Universe. What will you choose? You will be presented with cataclysmic scenarios
                that require resolutions. Each scenario is different and can be resolved with various methods. ditaDucks are extremely
                adept at learning and adapting to their environments, though they aren’t exactly motivated. So, you must guide your
                ditaDucks along their journey and towards their destination. Your choices matter. How will you lead your gaggle?
            </p>
            <p>
                This manual will provide you with a foundation for playing SOUL : Emergent. In chapter 1 you will be provided with an
                overview of the game’s modes and will learn the controls needed to interact with the game environment. Then in chapter
                two you will learn what SOUL stands for and what Emergent gameplay is. Here, you will find background information,
                otherwise called lore, for the game world. This chapter is optional but provides a base knowledge for the game world and
                its inhabitants. You may even find some hints and tricks that could help take the evolution of your lifeforms in new
                directions. After that you’re on your way!
            </p>
        </div>

        <div class="w3-content w3-justify  w3-padding-16" id="whatdoes">
            <h2 class="">System Requirements</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                SOUL:Emergent was developed using the Construct 3 engine. The core engine is based on web technologies but offers
                blazing fast speeds and unparalleled performance. Using the Construct 3 engine, development of SOUL:Emergent has been
                streamlined. New and additional functionality can be implemented quickly. Because the engine is web based, this means
                that modern computers can run SOUL:Emergent with minimum system resources. While the engine is based on web
                technologies, everything that is needed to play comes in one tidy package. There are no additional software packages
                required to run the software. Below is a list of the requirements to play SOUL:Emergent.
            </p>

            <ol style="color: white; list-style-type: none;">
                <li><b>Computer:</b> SOUL:Emergent is compatible with any modern computer</li>
                <li><b>Operation System:</b> You must be using Windows 7 or later. Windows 10 is highly recommended for complete compatibility.</li>
                <li><b>Controls:</b> A keyboard and mouse are required.</li>
                <li><b>Storage:</b> SOUL:Emergent has a whopping file size of 222mb. (Just kidding. That’s small.)</li>
                <li><b>Video:</b> Any modern graphics card within the past 7 years will work.</li>
                <li><b>Sound:</b> If your computer plays audio, then you’re golden.</li>
                <li><b>Connectivity:</b> A browser such as Chrome, Firefox, or Safari (to download the game). An active internet connection is
                required to download the game, to download updates, and to access online features.</li>
            </ol>
        </div>

        <div class="w3-content w3-justify  w3-padding-16" id="mechanics">
            <h2 class="">Installation</h2>
            <hr style="width:200px" class="w3-opacity">

            <p>
                After you meet or exceed the system requirements go to the <a href="https://www.superbuggames.com/games/index.html">www.SuperBugGames.com/SoulEmergent</a>, click the download button,
                and follow the directions to install the game on your computer.
            </p>

            <p style="color: red; text-align: center;">
                Notes: Game link is provided for demonstration purposes only. The game is not currently available.
            </p>
        </div>

        <div class="w3-content w3-justify  w3-padding-16" id="parts">
            <h2 class="">Game Modes</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                When first starting SOUL:Emergent you will have access to the Campaign mode. This mode brings you through the game’s
                story and increasingly difficult maps. During the beginning of campaign mode, you will be shown the basics of
                SOUL:Emergent. Further missions will introduce you to some of the games more complex operations such as creating
                adapting and evolving your ditaDucks. You can always replay the Campaign mode if you enjoy the story! During certain
                milestones in the Campaign other game modes will become available. The game modes are shown below.
            </p>

            <ol style="color: white; list-style-type: none;">
                <li><b>Campaign:</b> This is the main story mode of the game. Play this mode to familiarize yourself with the gameplay mechanics.</li>
                <li><b>Trial:</b> This game mode presents you with varying challenges to overcome. Each Trial has different restrictions on how the map
                can be played. Certain mechanics may be removed or changed to present a unique challenge. Use your wits to solve the
                puzzle!</li>
                <li><b>Defiance:</b> This mode was designed to test your endurance. Start off at a medium pace with different enemies making their way to
                disrupt your base. As the gameplay picks up waves of enemies increase in numbers and become smarter. This mode requires
                and online connection.</li>
                <li><b>Skirmish:</b> This mode enables you to play a game where you adjust the settings. By adjusting the settings, you will be able to test
                out new strategies or play a quick game.</li>
            </ol>
        </div>

        <div class="w3-content w3-justify  w3-padding-16" id="emergent">
            <h2 class="">Interface Overview</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                The interface is one of the three controls that make up the PC2 (Personal Control Center). Through it you can view
                statistics about units and structures. You can view an overview of the main screen through the mini-map. The main screen
                is where the bulk of gameplay takes place. The interface gives you access to Quick Actions and the main menu.
            </p>

            <div class="w3-center w3-margin w3-padding-16">
                <figure>
                    <img src="../images/screenshots/interface_in_game_960x515.png" alt="SOUL:Emergent interface" style="width: 80%; height: auto;">
                    <figcaption style="color: lightblue;">White boxes with numbers are for identification purposes only.</figcaption>
                </figure>
            </div>

            <div class="w3-content w3-panel" style="padding-left: 0;">
                <ul style="color: white; list-style-type: none;">
                    <li><b>Main Screen (1):</b> This is the main field of gameplay. In this area you will be able to see all the events that take place throughout the
                    game. Here you will be able to select ditaDucks or structures with your mouse. When a unit or structure is selected a
                    blue circle will appear around it. This means you can start issuing orders the unit or structure.</li>
                    <br>
                    <li><b>Status Data (2):</b> This window provides detailed information when any single unit or structure is selected. Types of information include
                    hp, cargo, and a portrait of the object.</li>
                    <br>
                    <li><b>Mini-map (3):</b> This map provides an overview of the entire gameplay area. It shows all the units, resource nodes, and structures that
                    are moving the Main Screen. The detail will not be as great, but it provides an excellent summary of what is happening
                    in the game.</li>
                    <br>
                    <li><b>Synaptic Commands (4):</b> Different actions can be created and stored here. Think of these as shortcuts to perform certain actions in the game.
                    This is another way to interact with the game environment.</li>
                    <br>
                    <li><b>Menu (5):</b> This button shows the SOUL:Emergent Options menu.</li>
                        <ul style="color: white; list-style-type: none;">
                            <br>
                            <li><b>Save Game:</b> This option allows you to save any offline game that you are currently in.</li>
                            <br>
                            <li><b>Load Game:</b> This option allows you to load a previously unfinished offline game.</li>
                            <br>
                            <li><b>Pause Game:</b> When offline you will be able to pause the game you are currently playing.</li>
                            <br>
                            <li><b>Options:</b> Various setting will be available in this window: sound, speed, and video.</li>
                            <br>
                            <li><b>Key Bindings:</b> Here you will be able to view a list of keyboard commands.</li>
                            <br>
                            <li><b>Resign:</b> This option will allow you to end the current game session.</li>
                            <br>
                            <li><b>Return to Game</b> This closes the menu window and returns to the current game.</li>
                        </ul>
                </ul>
            </div>

        </div>

        <div class="w3-content w3-justify  w3-padding-16" id="conclusion">
            <h2 class="">Conclusion</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                After reading chapter 1 you should have a basic understanding of what type of game SOUL:Emergent is. You should also
                know how to view the interface. A tutorial was provided for interacting with the game environment and you should now
                feel confident playing your first game of SOUL:Emergent. In Chapter 2 you will learn more about the world of
                SOUL:Emergent. You will be introduced to the ideas within the game and how Emergent gameplay was designed into
                SOUL:Emergent. You will also be able to read a deeper description of SOUL mechanics and how they apply to the game. All
                further descriptions of game mechanics build off those you just read in chapter 1.
            </p>
        </div>

        <div class="w3-center">
            <a href="../pages/intro.php" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-arrow-left w3-xxlarge" style="color:white"></i>
                <p>Intro</p>
            </a>
            <a href="../pages/chapter_two.php" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-arrow-right w3-xxlarge" style="color:white"></i>
                <p>Chapter Two</p>
            </a>
        </div>

        <!-- Footer -->

        <!-- End footer -->

    </div>
    <!-- END PAGE CONTENT -->

</body>
</html>