<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Jarallax -->
    <link href="js/dist/jarallax.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/clients.css" rel="stylesheet">
    <link href="css/pricing.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/para.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/menu.js"></script>
    <title>Swiiika</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Lobster&family=Roboto+Condensed:wght@300&display=swap');
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['errors'])) {
        $errorMessage = $_SESSION['errors'];
        unset($_SESSION['errors']);

        echo "
    <div id='errors' class='w3-modal' style='display: block;'>
        <div class='w3-modal-content w3-card-4 w3-animate-zoom'>
            <div class='modal'>
                <span onclick=\"document.getElementById('errors').style.display='none'; clearForm();\" class='w3-button w3-display-topright'>&times;</span>
                <h2>{$errorMessage}</h2>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('errors').style.display = 'block';
    </script>";
    }
    ?>

    <div id="test">
        <div id="menu">
            <div id="menu-bar" onclick="menuOnClick()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
            <nav class="nav" id="nav">
                <ul>
                    <li><a href="#head">Home</a></li>
                    <li><a href="#aboutme">About Me</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                </ul>
            </nav>
        </div>

        <div class="menu-bg" id="menu-bg"></div>

        <div id="logo" class="visible"><a href="#top"><img src="assets/images/logo.png" alt=""></a></div>
    </div>
    <div id="head">
        <div id="first" class="jarallax" data-jarallax data-jarallax-video="https://vimeo.com/824672611">
            <div id="container1">
                <img id="name" src="assets/images/Swiiika_website_header.png" alt="">
                <div id="socials">
                    <a href="https://discordapp.com/users/707445225559425096" target="_blank"><i class="fa-brands fa-discord"></i></a>
                    <a href="https://twitter.com/Swiiika_" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.tiktok.com/@swiiika?lang=en" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/channel/UCmB_ZdiFYmJUy9vEsCv55mA" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.twitch.tv/swiiika" target="_blank"><i class="fa-brands fa-twitch"></i></a>
                </div>
                <div class="scroll-down">Scroll for more <i class="fa-solid fa-angle-down bounce-down"></i></div>
            </div>
        </div>
    </div>
    <a href="#aboutme">
        <div class="border">
            <div class="border-text scroll-hidden">About Me</div>
        </div>
    </a>
    <div id="aboutme">
        <div class="scroll-hidden" id="aboutme-content">
            <img src="/assets/images/Layer 0.png" alt="">
            <div id="aboutme-text">
                <p>Hello! I'm,
                <h1>Connor Johnson</h1>

                A content editor and drone videographer with <strong>3+ years
                    of
                    experience</strong> creating engaging social media videos for influencers and businesses.
                <strong>My
                    work has garnered over one billion views</strong>, and I pride myself on delivering
                high-quality
                content that captures my clients' vision and engages their audience. Check out my portfolio to
                see some
                of my past work, and <strong>let's collaborate to take your video content to the next
                    level.</strong></p>
            </div>
        </div>

    </div>
    <a href="#portfolio">
        <div class="border">
            <div class="border-text">Portfolio</div>
        </div>
    </a>
    <div id="portfolio">
        <button class="arrow-right" type="button" onclick="handleRightClick()"><i class="fa-solid fa-arrow-right bounce-right"></i></button>
        <button class="arrow-left" type="button" onclick="handleLeftClick()"><i class="fa-solid fa-arrow-left bounce-left"></i></button>
        <div class="container">
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/filian.png" alt="" /><span class="name">filian</span>
            </a>
            <a onclick="goToIndex(1)" class="profile">
                <img src="assets/images/clients/fallenshadow.png" alt="" /><span class="name name2">Fallen
                    Shadow</span>
            </a>
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/lacari.png" alt="" /><span class="name name2">Lacari</span>
            </a>
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/Megalodon.png" alt="" /><span class="name name2">megalodonvt</span>
            </a>
            <a onclick="goToIndex(2)" class="profile">
                <img src="assets/images/clients/projektmelody.png" alt="" /><span class="name name2">ProjektMelody</span>
            </a>
            <a onclick="goToIndex(3)" class="profile">
                <img src="assets/images/clients/quqco.png" alt="" /><span class="name name2">quqco</span>
            </a>
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/sprixer.png" alt="" /><span class="name name2">Sprixer</span>
            </a>
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/yatosuki.png" alt="" /><span class="name name2">Yatosuki</span>
            </a>
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/blerp.png" alt="" /><span class="name name2">Blerp</span>
            </a>
            <a onclick="goToIndex(0)" class="profile">
                <img src="assets/images/clients/stemheads.png" alt="" /><span class="name name2">Stem
                    Heads</span>
            </a>
        </div>
        <div id="portfolio-content">

            <section class="port-section" data-index="0" data-status="active">
                <div class="video-dots">
                    <div class="dot dot-0 dot-active"></div>
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                    <div class="dot dot-4"></div>
                </div>
                <div class="vid-views">
                    <div id="video-container">
                        <div id="sections-container">
                            <div class="top-bar showhide"><button class="arrow-up" onclick="handleUpClick()">
                                    <i class="fa-solid fa-angle-up"></i></button>
                            </div>
                            <div class="bottom-bar showhide"><button class="arrow-down" onclick="handleDownClick()">
                                    <i class="fa-solid fa-angle-down"></i></button>
                            </div>
                            <section class="scroll-video filian-vids" UD-data-index="0" data-status="active" data-views="750,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('filian0')"></button>
                                <video class="shorts" id="filian0" preload="metadata" loop>
                                    <source src="assets/videos/filian/Filian_slices_natasha_V2.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>
                            <section class="scroll-video filian-vids" UD-data-index="1" data-status="inactive" data-views="24,000,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('filian1')"></button>
                                <video class="shorts" height="600" id="filian1" preload="metadata" loop>
                                    <source src="assets/videos/filian/Filian_Omegle_Reactions_2.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>
                            <section class="scroll-video filian-vids" UD-data-index="2" data-status="inactive" data-views="8,200,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('filian2')"></button>
                                <video class="shorts" height="600" id="filian2" preload="metadata" loop>
                                    <source src="assets/videos/filian/Filian_gets_splattered_by_miz_V2.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>
                            <section class="scroll-video filian-vids" UD-data-index="3" data-status="inactive" data-views="10,000,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('filian3')"></button>
                                <video class="shorts" height="600" id="filian3" preload="metadata" loop>
                                    <source src="assets/videos/filian/Filian_proves_shes_an_anime_girl_on_omegleV2.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>
                            <section class="scroll-video filian-vids" UD-data-index="4" data-status="inactive" data-views="4,400,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('filian4')"></button>
                                <video class="shorts" height="600" id="filian4" preload="metadata" loop>
                                    <source src="assets/videos/filian/Filian_finally_caught_her_tail.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>

                        </div>
                    </div>
                    <span id="view-count">750,000+ Views</span>
                </div>
                <div id="shorts-desc">
                    <p class="name">FILIAN <br> <span class=views>766,350,000+ <br>Views</span></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                </div>
                <div class="shorts-profile-picture"><img src="assets/images/clients/filian.png" alt="filian profile picture"></div>

            </section>
            <section class="port-section" data-index="1" data-status="inactive">
                <div class="video-dots">
                </div>
                <div class="vid-views">
                    <div id="video-container">
                        <div id="sections-container">
                            <section class="scroll-video" UD-data-index="0" data-status="active" data-views="100,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('fallenshadow0')"></button>
                                <video class="shorts" height="600" id="fallenshadow0" preload="metadata" loop>
                                    <source src="assets/videos/fallen shadow/Shadow_for_president.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>
                        </div>
                    </div>
                    <span id="view-count">100,000+ Views</span>
                </div>
                <div id="shorts-desc">
                    <p class="name">FALLEN SHADOW <br> <span class=views>1,500,000+ <br>Views</span></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                </div>
                <div class="shorts-profile-picture"><img src="assets/images/clients/fallenshadow.png" alt="fallenshadow profile picture"></div>

            </section>
            <section class="port-section" data-index="2" data-status="inactive">
                <div class="video-dots">
                </div>
                <div class="vid-views">
                    <div id="video-container">
                        <div id="sections-container">
                            <section class="scroll-video" UD-data-index="0" data-status="active" data-views="400,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('projektm0')"></button>
                                <video class="shorts" height="600" id="projektm0" preload="metadata" loop>
                                    <source src="assets/videos/projekt melody/Melody_gets_roasted_by_Charlie.mp4#t=0.001" type="video/mp4">
                                </video>
                            </section>
                        </div>
                    </div>
                    <span id="view-count">400,000+ Views</span>
                </div>
                <div id="shorts-desc">
                    <p class="name">PROJEKTMELODY <br> <span class=views>700,000+<br>Views</span></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                </div>
                <div class="shorts-profile-picture"><img src="assets/images/clients/projektmelody.png" alt="fallenshadow profile picture"></div>

            </section>
            <section class="port-section" data-index="3" data-status="inactive">
                <div class="video-dots">
                </div>
                <div class="vid-views">
                    <div id="video-container">
                        <div id="sections-container">
                            <section class="scroll-video" UD-data-index="0" data-status="active" data-views="400,000+ Views">
                                <button id="playpause" class='play-button showhide' onclick="playPause('quqco0')"></button>
                                <video class="shorts" height="600" id="quqco0" preload="metadata" loop>
                                    <source src="assets/videos/quqco/Quqcos_painting_fights_back.mp4" type="video/mp4">
                                </video>
                            </section>
                        </div>
                    </div>
                    <span id="view-count" class="flexFont">750,000+ Views</span>
                </div>
                <div id="shorts-desc">
                    <p class="name">QUQCO <br> <span class=views>2,800,000+ <br>Views</span></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                </div>
                <div class="shorts-profile-picture"><img src="assets/images/clients/quqco.png" alt="quqco profile picture"></div>

            </section>

        </div>
    </div>
    <a href="#pricing">
        <div class="border">
            <div class="border-text">Pricing</div>
        </div>
    </a>
    <div id="pricing">
        <div id="table-header">
            <img src="/assets/images/logo.png" alt="">
            <div id="line"></div>
            <p>Short-Form Content Editing & <br>Digital Marketing for Streamers</p>
        </div>
        <div id="table-container" style="overflow-x:auto;">
            <table id="pricing-table">
                <tr>
                    <th>Package-</th>
                    <th>Description- <span class="sub-text red">*Each package includes unlimited revisions*</span></th>
                    <th>Price <span class="sub-text">(Per Video/USD)</span></th>
                </tr>
                <tr>
                    <td>Full Set</td>
                    <td>
                        <ul>
                            <li>I'll search VODs & clips on your channel to find content that would perform well on
                                short-form social sites</li>
                            <li>I'll schedule, manage & post edited content on your socials with proper titles and tags
                            </li>
                            <li>Includes Full Edit &lpar;Listed in the "Edit Only" package&rpar;</li>
                        </ul>
                    </td>
                    <td>$75</td>
                </tr>
                <tr>
                    <td>Search Set</td>
                    <td>
                        <ul>
                            <li>I'll search VODs & clips on your channel to find content that would perform well on
                                short-form social sites</li>
                            <li>Includes Full Edit &lpar;Listed in the "Edit Only" package&rpar;</li>
                        </ul>
                    </td>
                    <td>$65</td>
                </tr>
                <tr>
                    <td>Manage Set</td>
                    <td>
                        <ul>
                            <li>I'll schedule, manage & post edited content on your socials with proper titles and tags
                            </li>
                            <li>Includes Full Edit &lpar;Listed in the "Edit Only" package&rpar;</li>
                        </ul>
                    </td>
                    <td>$60</td>
                </tr>
                <tr>
                    <td>Edit Only</td>
                    <td>
                        <ul>
                            <li>A full short-form edit that includes the following:</li>
                            <ul>
                                <li>Proper Cutting & Pacing</li>
                                <li>Subtitling</li>
                                <li>Background Music & Sound Effects</li>
                                <li>Proper Scaling & Cropping for vertical platforms (Tiktok, Youtube Shorts, Reels,
                                    etc.)</li>
                            </ul>
                        </ul>
                    </td>
                    <td>$50 <span class="sub-text">(subtitles)</span> <br>$45 <span class="sub-text">(no
                            subtitles)</span></td>
                </tr>
            </table>
        </div>
    </div>
    </div>
    <div id="contact-popout" class="pulse" onclick="document.getElementById('modal').style.display='block'">
        Contact Me
    </div>
    <div id="modal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <div class="modal">
                <span onclick="document.getElementById('modal').style.display='none'; clearForm()" class="w3-button w3-display-topright">&times;</span>

                <p>Contact Me</p>
                <form action="test.php" method="post">

                    <input type="text" id="name-input" name="name" placeholder="Name" required><br><br>

                    <input type="text" id="subject" name="subject" placeholder="Subject" required><br><br>

                    <input type="email" id="email" name="email" placeholder="Email" required><br><br>

                    <textarea id="message" name="message" rows="5" cols="30" placeholder="Message" required></textarea><br><br>


                    <input type="hidden" name="action" value="send">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <footer id="footer">
        <img src="assets/images/logo.png" alt="Swiiika Logo">
        <div id="socials">
            <a href="https://discordapp.com/users/707445225559425096" target="_blank"><i class="fa-brands fa-discord"></i></a>
            <a href="https://twitter.com/Swiiika_" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.tiktok.com/@swiiika?lang=en" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://www.youtube.com/channel/UCmB_ZdiFYmJUy9vEsCv55mA" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.twitch.tv/swiiika" target="_blank"><i class="fa-brands fa-twitch"></i></a>
        </div>
        <a href="mailto:business@swiiika.com">business@swiiika.com</a>
        <p>&copy;
            <?php echo date("Y"); ?> Swiiika | <a href="privacy.php">Privacy Policy</a>
        </p>
    </footer>

</body>

</html>

<script src="js/dist/jarallax.js"></script>
<script src="js/dist/jarallax-video.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/clients.js"></script>

<!-- Object Fit polyfill -->
<script src="https://unpkg.com/object-fit-images/dist/ofi.min.js"></script>
<!-- Lazy Load images -->
<script src="https://unpkg.com/object-fit-images/dist/ofi.min.js"></script>

<script src="js/dist/jarallax-element.js"></script>
<script src="https://kit.fontawesome.com/e23773eba1.js" crossorigin="anonymous"></script>