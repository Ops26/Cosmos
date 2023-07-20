<?php
$target_dir = "../php/project/";
$target_file = $target_dir . basename(str_replace("/", "ÜÜ", $_POST["link"] . ".php"));
//ÜÜ is the replace pattern for "/" --> because the image name cannot contain "/"
$target_file = str_replace("https:ÜÜÜÜ", "", $target_file);
$target_file = str_replace("http:ÜÜÜÜ", "", $target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image


//

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 1000000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}

// Allow certain file formats
if ($imageFileType != "php") {
    echo "Sorry, only PHP files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "Upload successfully (" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . ")";
        ?>
        <a id="goBack" href="../dashboard/dashboard-project.php">Go Back</a>

        <script>
                var elm = document.getElementById('goBack');
                elm.click();
                document.getElementById('thisLink').click();

        </script>
        <?php

    } else {
        echo "There was an error uploading your file.";
    }
}

?>
