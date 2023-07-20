<?php

if ($_POST['functionCall'] == 'renameImage') {
    $oldName = $_POST['oldImageName'];
    $newName = $_POST['newImageName'];

    rename("../images/img-home/" . $oldName . ".jpg", "../images/img-home/" . $newName . ".jpg", null);
}
