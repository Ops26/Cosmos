<?php

include 'check-login.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Newsletter</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard-newsletter.css">
    <link rel="stylesheet" href="../css/dashboard-homepage.css">
    <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"-->
    <!--          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <!--    <link rel="stylesheet" href="../css/style.css">-->
    <!--    <link rel="stylesheet" href="../css/dashboard_old.css">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/q4g9xf6hmegyk4ait2zefclrkuit1w92oa1lo3rg7y619op4/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <!--    <link rel="stylesheet" href="../../css/alertBanner.css">-->


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
                <span class="links_name">Contacto</span>
            </a>
            <span class="tooltip">Contacto</span>
        </li>
        <li>
            <a href="dashboard-estudio.php">
                <i class='bx bx-male'></i>
                <span class="links_name">Estudio</span>
            </a>
            <span class="tooltip">Estudio</span>
        </li>
        <li>
            <a href="dashboard-project.php">
                <i class="fa-solid fa-diagram-project"></i>
                <span class="links_name">Project</span>
            </a>
            <span class="tooltip">Project</span>
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

<section class="home-section">
    <div class="text">Dashboard - Newsletter</div>

    <hr class="dividingLine">
    <div class="headline">Change Image</div>

    <!--    Input for Image start-->

    <BR>
    <p id="imgScale" style="font-size: 18px; margin-left: 15px">Current Image (</p>
    <img id="currentImage" class="newsletterImg" src="../images/img-newsletter/img-newsletter.jpg">

    <script>
        //set the scale info for the current image
        const image = document.querySelector("#currentImage");
        const nw = image.naturalWidth;
        const nh = image.naturalHeight;

        document.querySelector("#imgScale").innerHTML += nw + " x " + nh + "):";
    </script>

    <form action="../functions/upload-Image-Newsletter.php" method="post" enctype="multipart/form-data">
        <div class="fileInput">
            <input class="chooseFileLabel" type="file" name="fileToUpload" id="fileToUpload"
                   accept="image/jpeg">
            <p style="font-size: 14px; margin-left: 15px">upload only jpg</p>
        </div>

        <BR>

        <div style="text-align: right; margin-right: 15px">
            <button class="uploadImageButton" type="submit" name="submitNewsletterImage" role="button"
                    style="background-color: #06f;">Upload Image
            </button>
        </div>
        <BR>

        <hr class="dividingLine">

    </form>















    <BR>
    <p id="imgScale1" style="font-size: 18px; margin-left: 15px">Second Image (</p>
    <img id="currentImage1" class="newsletterImg" src="../images/img-newsletter/img1.jpg">

    <script>
        //set the scale info for the current image
        const image1 = document.querySelector("#currentImage1");
        const nw1 = image.naturalWidth;
        const nh1 = image.naturalHeight;

        document.querySelector("#imgScale1").innerHTML += nw1 + " x " + nh1 + "):";
    </script>

    <form action="../functions/upload-Image-Newsletter-img1.php" method="post" enctype="multipart/form-data">
        <div class="fileInput">
            <input class="chooseFileLabel" type="file" name="fileToUpload" id="fileToUpload"
                   accept="image/jpeg">
            <p style="font-size: 14px; margin-left: 15px">upload only jpg</p>
        </div>

        <BR>

        <div style="text-align: right; margin-right: 15px">
            <button class="uploadImageButton" type="submit" name="submitNewsletterImage" role="button"
                    style="background-color: #06f;">Upload Image
            </button>
        </div>
        <BR>

        <hr class="dividingLine">

    </form>





    <BR>
    <p id="imgScale2" style="font-size: 18px; margin-left: 15px">Third Image (</p>
    <img id="currentImage2" class="newsletterImg" src="../images/img-newsletter/img2.jpg">

    <script>
        //set the scale info for the current image
        const image2 = document.querySelector("#currentImage2");
        const nw2 = image.naturalWidth;
        const nh2 = image.naturalHeight;

        document.querySelector("#imgScale2").innerHTML += nw2 + " x " + nh2 + "):";
    </script>

    <form action="../functions/upload-Image-Newsletter-img2.php" method="post" enctype="multipart/form-data">
        <div class="fileInput">
            <input class="chooseFileLabel" type="file" name="fileToUpload" id="fileToUpload"
                   accept="image/jpeg">
            <p style="font-size: 14px; margin-left: 15px">upload only jpg</p>
        </div>

        <BR>

        <div style="text-align: right; margin-right: 15px">
            <button class="uploadImageButton" type="submit" name="submitNewsletterImage" role="button"
                    style="background-color: #06f;">Upload Image
            </button>
        </div>
        <BR>

        <hr class="dividingLine">

    </form>







    <!--    Input for Image end-->

    <?php include '../functions/getNewsletterDate.php' ?>
    <?php include '../functions/getNewsletterText.php' ?>

    <div class="headline">Change Date</div>
    <BR>
    <input id="date" class="newsletter-date" type="text" placeholder="date"
           value='<?php echo getNewsletterDate("../files/newsletter-date.txt") ?>'>

    <BR>
    <button class="saveButton" onclick="updateDate()">
        Save
    </button>

    <hr class="dividingLine">

    <div class="headline">Update Text - English</div>
    <BR>
    <!--    english version-->
    <textarea id="textarea-en" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/en/newsletter-text-en.txt') ?></textarea>
    <BR>

    <button class="saveButton" onclick="updateText('en')">
        Save
    </button>
    <a href="../php/en/newsletter-en.php" class="openPageButton">Open Page</a>

    <script>
        tinymce.init({
            selector: '#textarea-en',
            plugins: [
                'advlist', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | table help'
        });
    </script>
    <!--    english version-->

    <!--    spanish version-->
    <hr class="dividingLine">
    <div class="headline">Update Text - Spanish</div>
    <BR>

    <textarea id="textarea-esp" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/esp/newsletter-text-esp.txt') ?></textarea>
    <BR>

    <button class="saveButton" onclick="updateText('esp')">
        Save
    </button>
    <a href="../php/esp/newsletter-esp.php" class="openPageButton">Open Page</a>

    <script>
        tinymce.init({
            selector: '#textarea-esp',
            plugins: [
                'advlist', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | table help'
        });
    </script>
    <!--    spanish version-->

    <!--    italy version-->
    <hr class="dividingLine">
    <div class="headline">Update Text - Italy</div>
    <BR>

    <textarea id="textarea-it" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/it/newsletter-text-it.txt') ?></textarea>
    <BR>

    <button class="saveButton" onclick="updateText('it')">
        Save
    </button>
    <a href="../php/it/newsletter-it.php" class="openPageButton">Open Page</a>

    <script>
        tinymce.init({
            selector: '#textarea-it',
            plugins: [
                'advlist', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | table help'
        });
    </script>
    <hr class="dividingLine">
    <!--    italy version-->

    <!--page end-->

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }

        function updateDate() {
            var date = document.getElementById("date").value;

            if (date === "") {
                alert("please enter a date");
                return;
            }

            $.ajax({
                url: "../functions/updateNewsletterDate.php",
                type: "POST",
                data: {functionCall: "update", date: date},
                success: function (result) {
                    // window.localStorage.clear();
                    window.location.reload();
                }
            });
        }

        function updateText(language) {

            let myContent;
            if (language === "en") {
                myContent = tinymce.get("textarea-en").getContent();
            } else if (language === "esp") {
                myContent = tinymce.get("textarea-esp").getContent();
            } else if (language === "it") {
                myContent = tinymce.get("textarea-it").getContent();
            }

            if (myContent === "") {
                alert("please enter some text");
                return;
            }

            $.ajax({
                url: "../functions/updateNewsletterText.php",
                type: "POST",
                data: {functionCall: "update", text: myContent, language: language},
                success: function (result) {
                    // window.localStorage.clear();
                    window.location.reload();
                }
            });
        }
    </script>
</body>
</html>
