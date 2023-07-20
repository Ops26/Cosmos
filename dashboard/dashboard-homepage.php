<?php

include 'check-login.php';

?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>COSMOS Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/dashboard-homepage.css">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"-->
    <!--          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <!--    <link rel="stylesheet" href="../css/style.css">-->
    <!--    <link rel="stylesheet" href="../css/dashboard_old.css">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">COSMOS</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="dashboard-homepage.php">
                <i class='bx bx-book-content'></i>
                <span class="links_name">Homepage</span>
            </a>
            <span class="tooltip">Homepage</span>
        </li>
        <li>
            <a href="dashboard-newsletter.php">
                <i class='bx bx-news'></i>
                <span class="links_name">Newsletter</span>
            </a>
            <span class="tooltip">Newsletter</span>
        </li>
        <li>
            <a href="dashboard-contacto.php">
                <i class='bx bxs-chat'></i>
                <span class="links_name">Contacts</span>
            </a>
            <span class="tooltip">Contacts</span>
        </li>
        <li>
            <a href="dashboard-estudio.php">
                <i class='bx bx-male'></i>
                <span class="links_name">Office</span>
            </a>
            <span class="tooltip">Office</span>
        </li>

        <li>
            <a href="dashboard-project.php">
                <i class="fa-solid fa-diagram-project"></i>
                <span class="links_name">Projects</span>
            </a>
            <span class="tooltip">Projects</span>
        </li>


        <li>
            <p>
                &nbsp
            </p>
        </li>
        <li>
            <a href="dashboard-terms-of-use.php">
                <i class='bx bx-columns'></i>
                <span class="links_name">Terms of use</span>
            </a>
            <span class="tooltip">Terms of use</span>
        </li>
        <li>
            <a href="dashboard-privacy-cookie-policy.php">
                <i class='bx bx-cookie'></i>
                <span class="links_name">Privacy & Cookies Policy</span>
            </a>
            <span class="tooltip">Privacy & Cookies Policy</span>
        </li>
        <li>
            <a href="dashboard-credits.php">
                <i class='bx bxs-face'></i>
                <span class="links_name">Credits</span>
            </a>
            <span class="tooltip">Credits</span>
        </li>
        <li>
            <a href="dashboard-all-rights-reserved.php">
                <i class='bx bx-check'></i>
                <span class="links_name">All Rights Reserved</span>
            </a>
            <span class="tooltip">All Rights Reserved</span>
        </li>
    </ul>
</div>

<!--page start-->
<?php include '../functions/getSocialMediaLinks.php' ?>
<?php include '../functions/getMenuItems.php' ?>

<section class="home-section">
    <div class="text">Dashboard - Homepage</div>
    <!--    ⌝⌝⌝⌝⌝⌝⌝⌝⌝-->
    <BR>
    <a href="#addNewProject">
        <button class="addNewPictureButton">New Project</button>
    </a>

    <!--    <BR> -->
    <!--    <hr class="dividingLine"> -->
    <!--    <div class="headline">Update Logo</div> -->
    <!--    <BR> -->
    <!--    <p style="font-size: 18px; margin-left: 15px">Current Image:</p> -->
    <!--    <img class="logoImg" src="../icons/logo.svg"> -->
    <BR>

    <hr class="dividingLine">
    <div class="headline">Update Social Media</div>
    <BR>
    <img class="socialMediaIcon" src="icons/instagram-logo.png">
    <input class="linkInputSocialMedia" id="link1" type="text"
           value='<?php echo getSocialMediaLink("instagram", "../files/social-media-links.txt"); ?>'>
    <BR>
    <img class="socialMediaIcon" src="icons/twitter-logo.png">
    <input class="linkInputSocialMedia" id="link2" type="text"
           value='<?php echo getSocialMediaLink("twitter", "../files/social-media-links.txt"); ?>'>
    <BR>
    <img class="socialMediaIcon" src="icons/facebook-logo.png">
    <input class="linkInputSocialMedia" id="link3" type="text"
           value='<?php echo getSocialMediaLink("facebook", "../files/social-media-links.txt"); ?>'>
    <BR>
    <img class="socialMediaIcon" src="icons/linkedin-logo.png">
    <input class="linkInputSocialMedia" id="link4" type="text"
           value='<?php echo getSocialMediaLink("linkedin", "../files/social-media-links.txt"); ?>'>

    <BR>
    <button class="saveButton" onclick="socialMediaLinkUpdate()">
        Save
    </button>

    <hr class="dividingLine" style="margin-top: 16px !important;">
    <div class="headline">Update Menu Bar</div>
    <BR>

    <div class="updateMenuItem">
        Item 1: <input style="margin-left: 14px" id="item1" class="inputForUpdateMenuItem" type="text"
                       value='<?php echo getMenuItems("1", "../files/menu-items.txt") ?>'>
    </div>
    <div class="updateMenuItem">
        Item 2: <input id="item2" class="inputForUpdateMenuItem" type="text"
                       value='<?php echo getMenuItems("2", "../files/menu-items.txt") ?>'>
    </div>
    <div class="updateMenuItem">
        Item 3: <input id="item3" class="inputForUpdateMenuItem" type="text"
                       value='<?php echo getMenuItems("3", "../files/menu-items.txt") ?>'>
    </div>


    <button class="saveButton" onclick="updateMenuBar()">
        Save
    </button>

    <hr class="dividingLine" style="margin-top: 16px !important;">
    <div class="headline">Update Images</div>

    <script>
        let image;
        let width;
        let height;
    </script>

    <?php
    $path = "../images/img-home/";
    $pathEnding = "jpg";

    foreach (glob('../images/img-home/*.jpg') as $filename) {
        $p = pathinfo($filename);
        ?>
        <section class="sec">

            <div class="container">
                <div class="img-col">

                    <!-- show the scale of the image -->
                    <p style="font-size: 18px; margin-left: 40px">
                        <script>
                            image = document.createElement('img');
                            image.src = '<?php echo "../images/img-home/" . $p["filename"] . "." . $p["extension"]; ?>';
                            document.write(image.width + " x " + image.height);
                        </script>
                    </p>

                    <img src='<?php echo "../images/img-home/" . $p["filename"] . "." . $p["extension"]; ?>'
                         alt="project image">



                </div>
                <div class="text-col">
                    <p>Update Link:</p>
                    <input style="width: 250px" id="imageName" value="<?php echo str_replace('ÜÜ', '/', $p['filename']) ?>"
                           onblur='imageNameUpdate("<?php echo str_replace('/', 'ÜÜ', $p['filename']) ?>",
                                   this.value.replace(/^https?:\/\//, "").replace(/^http?:\/\//, "").replaceAll("/", "ÜÜ"))'>
                    <!--                    ÜÜ is the replacement pattern for "/" because the image name cannot contain "/"-->



                    <button class="deleteImageButton"
                            onclick='deleteImage("<?php echo $p["filename"]; ?>", "<?php echo $pathEnding ?>")'>
                        Delete Image
                    </button>
                </div>
            </div>
        </section>

        <?php
    }
    ?>

    <hr class="dividingLine">
    <p id="addNewProject" style="margin-left: 40px; margin-top: 13px; font-size: 25px">Add New Project</p>

    <form action="../functions/upload-Image-Homepage.php" method="post" enctype="multipart/form-data">
        <div class="fileInput" style="text-align: left;">
            <input class="chooseFileLabel" type="file" name="fileToUpload" id="fileToUpload"
                   accept="image/jpeg">
        </div>

        <BR>

        <div class="linkInput">
            <label for="linkForImage"></label>
            <input type="text" id="linkForImage" name="link" placeholder="Add Link" size="30px"
                   style="border-color: gray; height: 30px">
            <p style="font-size: 14px">upload only jpg</p>
        </div>

        <div style="text-align: right; margin-right: 20px">
            <button class="uploadImageButton" type="submit" name="submit" role="button"
                    style="background-color: #06f;">Upload Image
            </button>
        </div>
        <BR>

        <hr class="dividingLine">

    </form>

    <BR>
    <BR>

</section>
<!--page end-->

<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }

    //this function is called when a user press the red "Delete" button
    function deleteImage(filename, fileType) {
        $.ajax({
            url: "../functions/deleteImage.php",
            type: "POST",
            data: {functionCall: "deleteImage", imageName: filename, fileType: fileType},
            success: function (result) {
                //alert(result);
                window.location.reload();
            }
        });
    }



    //this function is called when a user updated the imageName
    function imageNameUpdate(oldFileName, newFilename) {

        if (newFilename === "") {
            alert("The link can not be empty!");
            window.location.reload();
            return;
        } else if (newFilename === oldFileName) {
            return;
        }

        $.ajax({
            url: "../functions/renameImage.php",
            type: "POST",
            data: {functionCall: "renameImage", oldImageName: oldFileName, newImageName: newFilename},
            success: function (result) {
                // window.localStorage.clear();
                window.location.reload();
            }
        });
    }

    function socialMediaLinkUpdate() {
        var link1 = document.getElementById("link1").value;
        var link2 = document.getElementById("link2").value;
        var link3 = document.getElementById("link3").value;
        var link4 = document.getElementById("link4").value;

        if (emptyCheck(link1, link2, link3, link4) === false) {
            alert("None of the fields should be empty!");
            return;
        }

        $.ajax({
            url: "../functions/updateSocialMediaLinks.php",
            type: "POST",
            data: {functionCall: "update", item1: link1, item2: link2, item3: link3, item4: link4},
            success: function (result) {
                // window.localStorage.clear();
                window.location.reload();
            }
        });
    }

    function updateMenuBar() {
        var item1Value = document.getElementById("item1").value;
        var item2Value = document.getElementById("item2").value;
        var item3Value = document.getElementById("item3").value;
        var item4Value = document.getElementById("item4").value;


        if (emptyCheck(item1Value, item2Value, item3Value, item4Value) === false) {
            alert("None of the fields should be empty!");
            return;
        }

        $.ajax({
            url: "../functions/updateMenuItems.php",
            type: "POST",
            data: {functionCall: "update", item1: item1Value, item2: item2Value, item3: item3Value, item4: item4Value},
            success: function (result) {
                // window.localStorage.clear();
                window.location.reload();
            }
        });
    }

    //check if one of the items equals ""
    function emptyCheck(item1, item2, item3, item4) {
        if (item1 === "" || item2 === "" || item3 === "" || item4 === "") {
            return false;
        }
    }

</script>
</body>
</html>
