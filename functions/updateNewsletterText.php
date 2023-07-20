<?php

if ($_POST['functionCall'] == 'update') {
    $text = $_POST["text"];
    $language = $_POST["language"];

    $myfile = fopen("../files/" . $language . "/newsletter-text-" . $language . ".txt", "w") or die("Unable to open file!");
    $txt = $text;
    fwrite($myfile, $txt);
    fclose($myfile);
}
