<?php

if ($_POST['functionCall'] == 'update') {
    $text = $_POST["text"];
    $language = $_POST["language"];

    $myfile = fopen("../files/" . $language . "/estudio-" . $language . ".txt", "w") or die("Unable to open file!");

    fwrite($myfile, $text);
    fclose($myfile);
}

