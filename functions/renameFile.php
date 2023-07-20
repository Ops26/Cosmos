<?php

if ($_POST['functionCall'] == 'renameFile') {
    $oldName = $_POST['oldImageName'];
    $newName = $_POST['newImageName'];

    rename("../php/project/" . $oldName . ".php", "../php/project/" . $newName . ".php", null);

}
