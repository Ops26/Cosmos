<?php

if ($_POST['functionCall'] == 'update') {
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $item3 = $_POST["item3"];
    $language = $_POST["language"];

    if ($language == "en") {
        $myfile = fopen("../files/en/estudio-videoInformation-en.txt", "w") or die("Unable to open file!");
    } else if ($language == "esp") {
        $myfile = fopen("../files/esp/estudio-videoInformation-esp.txt", "w") or die("Unable to open file!");
    } else if ($language == "it") {
        $myfile = fopen("../files/it/estudio-videoInformation-it.txt", "w") or die("Unable to open file!");
    }
  

    $txt = $item1 . "\n" . $item2 . "\n" . $item3;
    fwrite($myfile, $txt);
    fclose($myfile);
}
