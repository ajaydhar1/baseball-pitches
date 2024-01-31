<?php

    // Import the PHP code fragment that determines which pitch to show 
    // based on the url parameter
    require_once("___pitch-selector.php");
    
    // Import the configuration file for the site
    require_once("___config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $ga_measurement_id ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '<?= $ga_measurement_id ?>');
        </script>

        <meta charset="utf-8" />
        
        <!-- This meta tag is supposed to prevent the YouTube video from auto resuming instead of seeking to the location of the pitch the user selects. Not sure if it really works though. The correct solution I found was to use host: 'https://www.youtube-nocookie.com' when initalizing the YouTube player. I left this meta tag in just in case. It doesn't seem to do any harm either way. --> 
        <meta http-equiv="Pragma" content="no-cache">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="A visual glossary of the main types of baseball pitches." />
        <meta name="author" content="" />
        <title><?= $title ?></title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="images/baseball.png" />      
        
        <!-- Twitter card and Open Graph (Facebook and LinkedIn)-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?= $site_name ?>: A Visual Glossary" />
        <meta name="twitter:description" content="A visual glossary of the main types of baseball pitches." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/images/Mariano_Rivera_pitching_closeup_July_2007.jpg" />
        
        <meta property="og:url" content="https://<?= $site_domain ?>/" />
        <meta property="og:title" content="<?= $site_name ?>: A Visual Glossary" />
        <meta property="og:description" content="A visual glossary of the main types of baseball pitches." />
        <meta property="og:image" content="https://<?= $site_domain ?>/images/Mariano_Rivera_pitching_closeup_July_2007.jpg" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Sidebar CSS -->
        <link href="css/styles-sidenav.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <style>

        </style>

    </head>
    <body>

        <!-- 1. The sidebar on the right. -->
        <?php 

            // Import the side navigation bar for selecting different pitches
            require_once("___navigation.php");

        ?>

        <!-- 2. The <iframe> (and video player) will replace this <div> tag. -->
        <div id="player"></div>

        <!-- jQuery JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <?php //<script src="http://www.youtube.com/player_api"></script> ?>

        <script>

            // 3. This code loads the YouTube IFrame Player API code asynchronously.
            // YouTube iFrame API Reference: https://developers.google.com/youtube/iframe_api_reference
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


            // 4. Baseball pitch configurations.
            pitchNumber = 0;
            rotateCount = 0;

            pitches = {0: {category: "Fastball", class: "four-seamer", name: "4 Seamer", desc: "Straight and fast", video: "bYnfginNCu4", times: [{start: 174, end: 184}, {start: 416, end: 424}, {start: 1197, end: 1204}, {start: 1389, end: 1396}, {start: 1585, end: 1593}]}, 1: {category: "Deceptive Fastball", class: "two-seamer", name: "2 Seamer", desc: "Fast but moves toward the side of the pitching hand", video: "bYnfginNCu4", times: [{start: 2371, end: 2378}, {start: 2505, end: 2512}, {start: 2688, end: 2695}]}, 2: {category: "Deceptive Fastball", class: "cutter", name: "Cutt-er", desc: "Fast but moves toward the pitcher's glove side", video: "bYnfginNCu4", times: [{start: 4815, end: 4822}, {start: 5471, end: 5479}, {start: 5927, end: 5932}]}, 3: {category: "Deceptive Fastball", class: "splitter", name: "Splitter/Slider/Sinker", desc: "Fast, but breaks down suddenly before reaching the plate", video: "bYnfginNCu4", times: [{start: 287, end: 295 }, {start: 307, end: 313}, {start: 398, end: 402}, {start: 461, end: 468}, {start: 1170, end: 1177}, {start: 1296, end: 1303}, {start: 1516, end: 1523}]}, 4: {category: "Deceptive Pitches", class: "change-up", name: "Change Up", desc: "Pitch appears to be faster than it is", video: "bYnfginNCu4", times: [{start: 933, end: 940}, {start: 998, end: 1007}, {start: 2090, end: 2097}, {start: 2211, end: 2218}, {start: 4128, end: 4137}, {start: 4299, end: 4306}, {start: 4990, end: 4997}]}, 5: {category: "Deceptive Pitches", class: "curve-ball", name: "Curve Ball", desc: "The ball curves toward or away from the batter, or curves 12-6 straight down the middle.", video: "bYnfginNCu4", times: [{start: 626, end: 633}, {start: 1483, end: 1490}, {start: 1879, end: 1886}, {start: 2425, end: 2432}, {start: 2450, end: 2457}, {start: 2550, end: 2557}, {start: 4479, end: 4486}, {start: 4842, end: 4849}]}};


            // 5. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;
            
            function onYouTubePlayerAPIReady() {
                player = new YT.Player('player', {
                    width: '100vh',
                    height: '100vw',
                    videoId: 'bYnfginNCu4',
                    host: 'https://www.youtube-nocookie.com',
                    playerVars: {
                        'autoplay': 1,
                        'loop': 1,
                        'mute': 1,
                        'start': <?= $firstStart ?>,
                        'end': <?= $firstEnd ?>
                    },
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });

            }

            // 6. The API will call this function and autoplay when the
            //    video player is ready.
            function onPlayerReady(event) {
                event.target.playVideo();
                rotateCount++;
            }

            
            // 7. The API calls this function when the player's state changes.
            //    We are calling when the player ends.
            function onPlayerStateChange(event) {        

                if(event.data === YT.PlayerState.ENDED && player.getVideoLoadedFraction() > 0) {        
            
                    arr = pitches[pitchNumber].times;

                    player.loadVideoById({
                        'videoId': 'bYnfginNCu4',
                        'host': 'https://www.youtube-nocookie.com',
                        'startSeconds': arr[rotateCount].start,
                        'endSeconds': arr[rotateCount].end
                    });
                    player.playVideo();

                    $(".reel-number").text(rotateCount + 1);
                    $(".total-reel-number").text(arr.length);

                    if (rotateCount == (arr.length - 1)) {
                        rotateCount = 0;
                    }
                    else {
                        rotateCount++;
                    }

                }

            }

            // Update the content in the sidenav
            function updateSideNavContent(id) {

                pitchNumber = id;

                rotateCount = 0;

                // highlight the right pitch
                $(".pitch-type").css("color", "white");
                $("." + pitches[id].class).css("color", "yellow");
                if (pitchNumber == 2) {
                    $("." + pitches[id].class).css("color", "#ff8a8a");
                }
                $(".pitch-desc-name").text(pitches[id].name);
                $(".pitch-desc-type").text(pitches[id].category);
                $(".pitch-description").text( pitches[id].desc);

                arr = pitches[id].times;

                $(".reel-number").text((rotateCount + 1).toString());
                $(".total-reel-number").text(arr.length);
            }

            // Gets the value of url parameters based on their name (key)
            // from JavaScript
            function qs(key) {
                key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
                var match = location.search.match(new RegExp("[?&]"+key+"=([^&]+)(&|$)"));
                return match && decodeURIComponent(match[1].replace(/\+/g, " "));
            }


            // A $( document ).ready() block. Called after the page has finished 
            // loading. A part of the jQuery library.
            $(document).ready(function() {
                var pitch = qs("pitch");


                if (pitch) {
                    updateSideNavContent(parseInt(pitch));
                }

                else {
                    updateSideNavContent(0);
                }

            });

            // Show/hide sidebar depending on device
            if (!isMobile()) {
                $(".menu-toggle.rounded").addClass("active");
                $("#sidebar-wrapper").addClass("active");

                $(".svg-inline--fa").removeClass("fa-bars");
                $(".svg-inline--fa").addClass("fa-xmark");
            }

            // Check if user is on a mobile phone. If they are, don't show the side nav on load.
            function isMobile() {
                if (/Mobi|Android/i.test(navigator.userAgent)) {
                    // mobile!
                    return true;
                }
                else {
                    return false;
                }
            }

        </script>

    </body>
</html>
