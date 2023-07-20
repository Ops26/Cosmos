<?php

if ($_POST['functionCall'] == 'update') {
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $item3 = $_POST["item3"];
    $item4 = $_POST["item4"];

    $myfile = fopen("../files/menu-items.txt", "w") or die("Unable to open file!");
    $txt = $item1 . "\n" . $item2 . "\n" . $item3 . "\n" . $item4;
    fwrite($myfile, $txt);
    fclose($myfile);
}