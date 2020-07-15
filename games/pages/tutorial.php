<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/collapsible.css">
    <link rel="stylesheet" href="../css/blur.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
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
            <a href="#whatdoes" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-small" id="main">

        <div class="w3-container w3-padding-32 w3-center w3-transparent" id="home">
            <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Tutorial</h1>
            <p>By Patrick Nolen</p>
        </div>

        <!-- Paragraph Links -->
        <div class="w3-content w3-center  w3-padding-8" id="chapter_links">
            <h3 class="chapter_links">Tutorial Links</h3>
            <hr style="width:200px" class="w3-auto w3-opacity">
            <ol style="list-style-position: inside;" class="w3-ol w3-container w3-auto">
                <li><a href="#intro">Solving Problems</a></li>
                <li><a href="#tutorial_campaign" onclick="document.getElementById('tutorial_campaign').click()">Starting a new campaign</a></li>
                <li><a href="#tutorial_sector" onclick="document.getElementById('tutorial_sector').click()">Start repairing the sector</a></li>
                <li><a href="#tutorial_attack" onclick="document.getElementById('tutorial_attack').click()">Defend the attack</a></li>
                <li><a href="#tutorial_clean" onclick="document.getElementById('tutorial_clean').click()">Clean up</a></li>
                <li><a href="#conclusion">What you have learned</a></li>
            </ol>
        </div>

        <!-- Intro -->
        <div class="w3-content w3-justify  w3-padding-16" id="intro">
            <h2 class="">Solving Problems</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                There are many ways to solve a problem in SOUL:Emergent. The way approach repairing a Sector may be
                different than
                someone else. In the image shown in PARTS OF THE GAME the core needs to be repaired. You have two
                DITADUCKS at your
                disposal. You are surrounded by CRUX and DITA and have three GLITCHES closing in on you from the top
                right corner of the
                screen. Your objective is to repair the CORE which will start transforming the CRUX into DITA.
            </p>
        </div>

        <!-- The Modal used for the tutorial images -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="modal-img">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>

        <!-- The tutorial -->
        <div class="w3-content w3-justify w3-padding-16 tutorial" id="tutorial">

            <h2 class="">Tutorial – Your First Campaign</h2>
            <hr style="width:200px" class="w3-opacity">

            <button id="all_tutorials_button" class="w3-btn w3-medium w3-blue-gray w3-hover-blue" data-text-expand="Expand all tutorials" data-text-close="Close all tutorials"
            onclick="
            document.getElementById('tutorial_campaign').click()
            document.getElementById('tutorial_sector').click()
            document.getElementById('tutorial_attack').click()
            document.getElementById('tutorial_clean').click()">Expand all tutorials</button>

            <ol style="list-style: none; padding-left: 0;">
                <!-- Start List Item A -->
                <li>
                    <button type="button" id="tutorial_campaign" class="collapsible" data-child-up="camp_up" data-child-down="camp_down">
                        <h4 class="tutorial_button_text">I. Start a new campaign</h4>
                        <i id="camp_down" class="fa fa-chevron-down" style="display: inline-block"> Open</i>
                        <i id="camp_up" class="fa fa-chevron-up" style="display: none"> Close</i>
                    </button>

                    <div class="box">

                        <div class="blur">
                            <!-- this stays empty -->
                        </div>

                        <div class="content">
                            <ol type="1">

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5>Start a new game</h5>

                                            <ol type="A">
                                                <li>
                                                    From the main menu select New Campaign.
                                                </li>
                                                <p>You are now on the Prototype Selection Screen.</p>
                                                <li>
                                                    Select a prototype for your ditaDuck
                                                </li>
                                                <p>
                                                    For the purposes of this tutorial, the Astir is selcted.
                                                </p>
                                                <li>
                                                    Click the button that says Start Game
                                                </li>
                                                <p>
                                                    You are now in the first sector of the campaign.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/main_menu_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/prototype_select_960x515.jpg" alt="Exploring" width="400" height="214">
                                    </div>

                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Explore your surroundings</h5>
                                            <ol type="A">
                                                <li>
                                                    From the list of your Synpatic Commands click the top left button
                                                    that looks like a compass.
                                                </li>
                                                <p>Notice when you hover over the button, text is displayed to describe
                                                    what this button does. This button tells your ditaDucks to Explore
                                                    the Sector.
                                                </p>
                                                <p>As your ditaDuck explores, it will discover different
                                                    parts of the sector. It may find areas that can be repaired, resources
                                                    that can be collected, and hostiles that can be engaged. When new things
                                                    are discovered, the mini-map will blink with a notification. It looks
                                                    like your ditaDuck has found a break in the sector and some Ignite above it.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/explore_command_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/found_break_dita_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Start collecting resources</h5>
                                            <ol type="A">
                                                <li>
                                                    Left-click the Gather button from the Synaptic Commands.
                                                </li>
                                                <p>
                                                    Your ditaDuck starts gathering the Ignite. This will be useful
                                                    with repairing the break.

                                                    Notice that the cargo is increaseing in the object data. This indicates
                                                    that you have more resources available.<br><br>

                                                    This seems like it may take a while. Let's create more ditaDucks.
                                                </p>
                                                <li>
                                                    Left-click the Multiply Command from your Synaptic Commands interface.
                                                </li>
                                                <p>
                                                    Your ditaDuck will move to an open area and multiply. You now have two
                                                    ditaDucks. This will use half of your existing cargo supply, so use this
                                                    command wisely. It is also a useful command when you need reinforcements.
                                                    Now you will be able to gather Ignite much more quickly.
                                                </p>
                                                <li>
                                                    Command your ditaDucks to start gathering resources again.Continue this
                                                    process until you have at least four ditaDucks.
                                                </li>
                                                <p>
                                                    Note that as your gaggle increases in size, the amount of cargo you
                                                    can cary is increasing as well. Each ditaDuck can cary and gives you an
                                                    additional 25 cargo capacity.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>
                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/gather_command_960x515.jpg" alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/multiply_command_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Expand your Orbital Sphere</h5>
                                            <ol type="A">
                                                <li>
                                                    Once you have 200 cargo, double right-click on your core. Your core
                                                    is the grey globe in the top-left portion of your screen.
                                                </li>
                                                <p>
                                                    Your core is now upgraded. At certain thresholds you will be able
                                                    expand your terminal. Upgrading your Core has also expanded your Orbital Sphere
                                                    which allows your ditaDucks to venture further out into the Sector.
                                                    <br><br>
                                                    When you clicked on your Core, your Orbital Sphere was viewable on the screen.
                                                    Remember that if your ditaDucks venture outside your Orbital Sphere the will
                                                    fall into oblivion.

                                                    The Orbital Sphere can be seen in the screenshot as floating balls of energy
                                                    to the right of the screen.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/orbital_sphere_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                            </ol> <!-- end primary ol -->

                        </div> <!-- end content -->

                    </div> <!-- end box -->

                </li>
                <!-- End List Item I -->

                <!-- Start List Item II -->
                <li>
                    <button type="button" id="tutorial_sector" class="collapsible" data-child-up="sector_up" data-child-down="sector_down">
                        <h4 class="tutorial_button_text">II. Start repairing the sector</h4>
                        <i id="sector_down" class="fa fa-chevron-down" style="display: inline-block"> Open</i>
                        <i id="sector_up" class="fa fa-chevron-up" style="display: none"> Close</i>
                    </button>

                    <div class="box">

                        <div class="blur">
                            <!-- this stays empty -->
                        </div>

                        <div class="content">
                            <ol type="1">

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Start repairing the Defects</h5>
                                            <ol type="A">
                                                <li>
                                                    Click the Repair button in your Synaptic Command interface.
                                                </li>
                                                <p>
                                                    All of your ditaDucks move torwards the break to start repairs.
                                                    <br>
                                                    Having all of your units focusing on the same task can be ineffective.
                                                    You will now learn how to group your ditaDucks. One will focus on gathering,
                                                    while the other group with focus on the repairs.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>

                                        <li>
                                            <h5 class="">Create two groups of ditaDucks</h5>
                                            <ol type="A">
                                                <li>
                                                    Move your ditaDucks into two separte groups. Move your mouse cursor to
                                                    the top left corner of one of the groups. Press and hold down your
                                                    left mouse button and drag to the bottom right corner of this group.
                                                </li>
                                                <p>
                                                    As your dragging your mouse cursor across screen you'll notice a
                                                    highlighted box that surounds the group of ditaDucks. All units inside
                                                    this box will be selected.
                                                </p>
                                                <li>
                                                    With the group still highlighted, Press ctrl + 1.
                                                </li>
                                                <p>
                                                    This will add all the units you just selected into group and assign
                                                    the hotkey to the 1 key. The hotkey means you can press the 1 key on
                                                    your keypad and it will select all of those units again. You can
                                                    do this for up to ten groups using the numbers 1 - 0.
                                                </p>
                                                <p>
                                                    Using the same process, create a second group of ditaDucks and assign
                                                    them to the 2 key.
                                                </p>
                                                <p>
                                                    Now use the hotkeys to select those groups and assign them commands.
                                                </p>
                                                <li>
                                                    Press the 1 key to select group one.
                                                </li>
                                                <li>
                                                    Left-click the gather button from your Synaptic Commands list.
                                                </li>
                                                <p>Group one begins gathering the Ignite.</p>
                                                <li>
                                                    Press the 2 key to select group two.
                                                </li>
                                                <li>
                                                    Left-click the repair button from your Synaptic Commands list.
                                                </li>
                                                <p>Group two begins repairing the Sector break.</p>
                                                <p>
                                                    Each group of ditaDucks is now carrying out their own commands.
                                                    Divide your ditaDucks into separate groups when you want to
                                                    easily select them and when you weant want to have them focus on
                                                    separte tasks.
                                                    <br><br>
                                                    Continue creating and adding ditaDucks to groups to efficiently
                                                    repair the Sector.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/main_menu_960x515.jpg" alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/two_groups.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/group_selection_one_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/group_selection_two_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                            </ol> <!-- end primary ol -->

                        </div> <!-- end content -->

                    </div> <!-- end box -->

                </li>
                <!-- End List Item II -->

                <!-- Start List Item III -->
                <li>
                    <button type="button" id="tutorial_attack" class="collapsible" data-child-up="attack_up" data-child-down="attack_down">
                        <h4 class="tutorial_button_text">III. Defend the attack</h4>
                        <i id="attack_down" class="fa fa-chevron-down" style="display: inline-block"> Open</i>
                        <i id="attack_up" class="fa fa-chevron-up" style="display: none"> Close</i>
                    </button>

                    <div class="box">

                        <div class="blur">
                            <!-- this stays empty -->
                        </div>

                        <div class="content">
                            <ol type="1">

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5>Spot the Glitch</h5>
                                            <ol type="A">
                                                <p>
                                                    Your minimap is blinking red! This indiciates that The Glitch
                                                    is intruding into this Sector. Prepare for battle!
                                                </p>
                                                <li>
                                                    Select the group of ditaDucks performing repairs by pressing the 2
                                                    hotkey and then click the shield button from the Symantic Command interface.
                                                </li>
                                                <p>
                                                    This is the defend command. When using the defend command
                                                    ditaDucks will attack intruders when they are within the Orbital
                                                    Sphere. If no intruders are in the Orbita Sphere, those ditaDucks
                                                    will continue on with their other assigned tasks.
                                                </p>
                                                <p>
                                                    The Glitch troops are within the Orbital Sphere. Your ditaDucks
                                                    are moving to intercept them.

                                                    Another red notification on the minimap. The Glitch has reinforcements!
                                                    It's time for you to recruit some heavy hitters by evolving your ditaDucks.
                                                </p>

                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/defendjpg.jpg" alt="Exploring" width="400" height="214">
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/merge_command_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>

                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Evolve your ditaDucks</h5>
                                            <ol type="A">
                                                <li>
                                                    Select four ditaDucks the group gathering Ignite.
                                                </li>
                                                <li>
                                                    Click the merge button form the Snaptic Commands interface. The
                                                    merge button has three small circles on the left with and single
                                                    arrow combining and pointing to the right.
                                                </li>
                                                <p>
                                                    It will take a few seconds as the four ditaDucks you selected
                                                    begin to merge. Once the merge is complete you will have a
                                                    Bigger, stronger, and faster ditaDuck.
                                                </p>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src" src="../images/screenshots/merge_command_960x515.jpg"
                                            alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Attack the invading Glitch</h5>
                                            <ol type="A">
                                                <li>
                                                    Select the newly created larger ditaDuck and press the sword
                                                    button from the Synaptic Commands interface.
                                                </li>
                                                <p>
                                                    This is the attack command. The attack command is different
                                                    from the defend commmand, in that ditaDucks will persue the enemy
                                                    outside the Orbital Sphere. When you evolved your ditaDuck into
                                                    its larger form, its potential increased and it gained a new
                                                    characteristic called Aegis. The aegis is a shield that prevents
                                                    the larger ditaDuck from being destroyed when outside of the Orbital
                                                    sphere.
                                                </p>
                                                <li>
                                                    Use the larger ditaDuck and it's Aegis with its increased strength
                                                    and quickness to destroy the invading Glitch.
                                                </li>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/large_ditaDuck.jpg" alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                            </ol> <!-- end primary ol -->

                        </div> <!-- end content -->

                    </div> <!-- end box -->

                </li>
                    <!-- End List Item III -->

                <!-- Start List Item IV -->
                <li>
                    <button type="button" id="tutorial_clean" class="collapsible" data-child-up="clean_up" data-child-down="clean_down">
                        <h4 class="tutorial_button_text">IV. Clean up</h4>
                        <i id="clean_down" class="fa fa-chevron-down" style="display: inline-block"> Open</i>
                        <i id="clean_up" class="fa fa-chevron-up" style="display: none"> Close</i>
                    </button>

                    <div class="box">

                        <div class="blur">
                            <!-- this stays empty -->
                        </div>

                        <div class="content">
                            <ol type="1">

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5>Finish repairing the Sector</h5>
                                            <ol type="A">
                                                <p>
                                                    With the Glitch now destroyed, use the skills you
                                                    have just learned to finish repairing the sector.
                                                </p>
                                                <li>
                                                    With the Glitch now destroyed, use the skills you
                                                    have just learned to finish repairing the sector.
                                                </li>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/finish_repairs.jpg" alt="Exploring" width="400" height="214">
                                    </div>

                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block w3-half">
                                        <li>
                                            <h5 class="">Connect to a new Sector</h5>
                                            <ol type="A">
                                                <li>
                                                    After repairing the Sector you will be presented with results screen.
                                                    This screen will show you data from the map you just played.
                                                    <br><br>
                                                    <p>
                                                        Some of the data that will be displayed on the results page are:
                                                        <ul>
                                                        <li style="color: white;">The amount of time you spent on the map.</li>
                                                        <li style="color: white;">The amount of Glitch you destroyed.</li>
                                                        <li style="color: white;">The amount of ditaDucks you lost.</li>
                                                        <li style="color: white;">The amount of resources you collected.</li>
                                                        <li style="color: white;">Rewards you are presented with.</li>
                                                        </ul>
                                                    </p>

                                                </li>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>

                                    <div class="w3-display-container w3-right">
                                        <img id="myImg" class="w3-padding-small img-modal modal-src"
                                            src="../images/screenshots/main_menu_960x515.jpg" alt="Exploring" width="400" height="214">
                                    </div>
                                </div> <!-- end container row -->

                                <div class="w3-panel w3-display-container w3-row">
                                    <div class="w3-show-inline-block">
                                        <li>
                                            <h5 class="">Great Job</h5>
                                            <ol type="A">
                                                <p>
                                                   After completeing this tutorial you should now know the basics
                                                   of how to play SOUL:Emergent. You learned how to: start a new
                                                   campaign, use your Synaptic Commands to search a sector, gather
                                                   resources, attack and defend with your ditaDucks. You also learned
                                                   how to upgrade your core and expand your Orbital Sphere.
                                                   <br><br>
                                                   Travelling through the differents
                                                   sectors you will be presented with different challenges. You will
                                                   all discover new ditaDucks that you can recruit to your gaggle.
                                                   With the rewards you receive for repairing sectors, you will be
                                                   able to evolve your ditaDucks characteristics in new ways which
                                                   will grant them access to the Synaptic Commands.
                                                </>
                                            </ol> <!-- end inside ol -->
                                        </li>
                                    </div>
                                </div> <!-- end container row -->

                            </ol> <!-- end primary ol -->

                        </div> <!-- end content -->

                    </div> <!-- end box -->

                </li>
                <!-- End List Item D -->

            </ol>
        </div>

        <div class="w3-content w3-justify  w3-padding-16" id="conclusion">
            <h2 class="">What you have learned</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>
                After reading chapter 2 you should have a deeper understanding of what SOUL:EMERGENT is. You read
                through a description
                for each of the different parts of SOUL. You learned about using Synaptic Commands, the benefits of the
                Orbital Sphere,
                the benefits of having a Unified gaggle, and how the Logic System operates. You then learned about
                EMERGENT gameplay and
                how it is a central theme for SOUL:EMERGENT. You were then introduced to the parts of the game and given
                a brief
                description for each. Last, you were taken through a game scenario in which you learned how to reapir a
                sector and fend
                off an invading Glitch group. Now go forth and use all your skills and knowledge an Originator to keep the Neural Net
                operational and delve into the evolving world of SOUL:Emergent!
                <br><br>
                We're counting on you Originator!
            </p>
        </div>

        <div class="w3-center">
            <a href="../pages/chapter_two.php" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-arrow-left w3-xxlarge" style="color:white"></i>
                <p>Chapter Two</p>
            </a>
            <a href="../soul-emergent.php" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-home w3-xxlarge" style="color:white"></i>
                <p>Home</p>
            </a>
        </div>

        <!-- Footer -->
        <footer class="w3-content w3-center w3-padding-64  w3-xlarge">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p class="w3-medium">All rights reserved.</p>
            <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                    class="w3-hover-text-green">w3.css</a></p>
        </footer>
        <!-- End footer -->

        <!-- END PAGE CONTENT -->
    </div>

    <script src="../js/collapsible.js"></script>
    <script src="../js/modal.js"></script>
</body>

</html>