<?php

function getSocialMediaLink($name, $path)
{
    $filename = $path;
    $array = explode("\n", file_get_contents($filename));

    if ($name == "instagram") {
        return $array[0];
    } else if ($name == "twitter") {
        return $array[1];
    } else if ($name == "facebook") {
        return $array[2];
    } else if ($name == "linkedin") {
        return $array[3];
    }
}


