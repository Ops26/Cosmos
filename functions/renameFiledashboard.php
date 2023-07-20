<?php

if ($_POST['functionCall'] == 'renameFiledashboard') {
    $oldName = $_POST['oldDashName'];
    $newName = $_POST['newDashName'];

    rename("../php/project/dashboard" . $oldName . ".php", "../php/project/dashboard" . $newName . ".php", null);

}
