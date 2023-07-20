<?php

if ($_POST['functionCall'] == 'update') {
    $date = $_POST["date"];

    $myfile = fopen("../files/newsletter-date.txt", "w") or die("Unable to open file!");
    $txt = $date;
    fwrite($myfile, $txt);
    fclose($myfile);
}
