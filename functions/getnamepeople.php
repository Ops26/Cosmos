<?php

function getnamepeople($name, $path)
{
    $filename = $path;
    $array = explode("\n", file_get_contents($filename));

    if ($name == "1") {
        return $array[0];
    } else if ($name == "2") {
        return $array[1];
    } else if ($name == "3") {
        return $array[2];
    }
    else if ($name == "4") {
        return $array[3];
    } else if ($name == "5") {
        return $array[4];
    }
    else if ($name == "6") {
        return $array[5];
    }
    else if ($name == "7") {
        return $array[6];
    }
    else if ($name == "8") {
        return $array[7];
    }
    else if ($name == "9") {
        return $array[8];
    }

}
