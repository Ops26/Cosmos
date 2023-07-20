<?php

if ($_POST['functionCall'] == 'update') {
    $text = $_POST["text"];
    $language = $_POST["language"];

    if($_POST['selector'] == 'terms-of-use') {
        $myfile = fopen("../files/" . $language . "/terms-of-use-" . $language . ".txt", "w") or die("Unable to open file!");
    }
    else if($_POST['selector'] == 'privacy-cookie-policy') {
        $myfile = fopen("../files/" . $language . "/privacy-cookie-policy-" . $language . ".txt", "w") or die("Unable to open file!");
    }
    else if($_POST['selector'] == 'credits') {
        $myfile = fopen("../files/" . $language . "/credits-" . $language . ".txt", "w") or die("Unable to open file!");
    }
    else if($_POST['selector'] == 'all-rights-reserved') {
        $myfile = fopen("../files/" . $language . "/all-rights-reserved-" . $language . ".txt", "w") or die("Unable to open file!");
    }

    fwrite($myfile, $text);
    fclose($myfile);
}
