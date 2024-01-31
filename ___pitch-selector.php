<?php

    require_once("___config.php");

    // Determine the first pitch to show and the title of the webpage 
    // based on the url parameter named "pitch"

    if ($_GET["pitch"]) {
        $pitch = $_GET["pitch"];
        if ($pitch == 1) {
            $firstStart = 2371;
            $firstEnd = 2378;
            $numOfPitches = 3;
            $title = "Storyteller - 2 Seamer";
        }
        else if ($pitch == 2) {
            $firstStart = 4815;
            $firstEnd = 4822;
            $numOfPitches = 3;
            $title = "Storyteller - Cutter";
        }
        else if ($pitch == 3) {
            $firstStart = 287;
            $firstEnd = 295;
            $numOfPitches = 7;
            $title = "Splitter/Slider/Sinker";
        }
        else if ($pitch == 4) {
            $firstStart = 933;
            $firstEnd = 940;
            $numOfPitches = 7;
            $title = "Change Up";

        }
        else if ($pitch == 5) {
            $firstStart = 626;
            $firstEnd = 633;
            $numOfPitches = 8;
            $title = "Curve Ball";
        }
        else {
            $firstStart = 174;
            $firstEnd = 184;
            $numOfPitches = 5;
            $title = $site_name . " Reel";
        }
    }
    else {
        $firstStart = 174;
        $firstEnd = 184;
        $numOfPitches = 5;
        $title = $site_name . " Reel";
    }

?>