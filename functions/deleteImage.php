<?php


if ($_POST['functionCall'] == 'deleteImage') {
    $name = $_POST['imageName'];
    $fileType = $_POST['fileType'];

    unlink("../images/img-home/" . $name . "." . $fileType);
    echo test($name);
}

function test($name)
{
    return "Deleted Image: " . " " . $name;
}
