<?php

function getNewsletterDate($path)
{
    $filename = $path;
    $array = explode("\n", file_get_contents($filename));

   return $array[0];
}
