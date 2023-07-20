<?php

function getFooterTexts($path)
{
    $filename = $path;
    $array = explode("\n", file_get_contents($filename));

    $allText = "";

    $i = 0;

    while($i < count($array)) {
//        $allText .= $array[$i] . "<br>";
        $allText .= $array[$i] . "\n";
        $i++;
    }

    return $allText;
}