<?php

function getMenuItems($name, $path)
{
    $filename = $path;
    $array = explode("\n", file_get_contents($filename));

    if ($name == "1") {
        return $array[0];
      } else if ($name == "2") {
        return $array[1];
    }

    else if ($name == "3") {
        return $array[2];
    }
}
