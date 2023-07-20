<?php

if ($_POST['functionCall'] == 'update') {
    $text = $_POST["text"];

    $myfile = fopen("../files/contacto-information.txt", "w") or die("Unable to open file!");
    $txt = $text;
    fwrite($myfile, $txt);
    fclose($myfile);
}
