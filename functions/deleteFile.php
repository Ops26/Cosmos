<?php


if ($_POST['functionCall'] == 'deleteFile') {
    $name = $_POST['fileName'];
    $fileType = $_POST['fileType'];

    unlink("../project/" . $name . "." . $fileType);
    echo test($name);
}

function test($name)
{
    return "Deleted File: " . " " . $name;
}
