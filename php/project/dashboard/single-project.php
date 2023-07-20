<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>COSMOS Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/dashboard-project.css">
    <link rel="stylesheet" href="../../../css/single-project.css">
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
            <a href="../../../dashboard/dashboard-homepage.php">
                <i class='bx bx-book-content'></i>
                <span class="links_name">Homepage</span>
            </a>
            <span class="tooltip">Homepage</span>
        </li>
        <li>
            <a href="../../../dashboard/dashboard-newsletter.php">
                <i class='bx bx-news'></i>
                <span class="links_name">Newsletter</span>
            </a>
            <span class="tooltip">Newsletter</span>
        </li>
        <li>
            <a href="../../../dashboard/dashboard-contacto.php">
                <i class='bx bxs-chat'></i>
                <span class="links_name">Contacto</span>
            </a>
            <span class="tooltip">Contacto</span>
        </li>
        <li>
            <a href="../../../dashboard/dashboard-estudio.php">
                <i class='bx bx-male'></i>
                <span class="links_name">Estudio</span>
            </a>
            <span class="tooltip">Estudio</span>
        </li>

        <li>
            <a href="../../../dashboard/dashboard-project.php">
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
            <a href="../../../dashboard/dashboard-terms-of-use.php">
                <i class='bx bx-columns'></i>
                <span class="links_name">Terms of use</span>
            </a>
            <span class="tooltip">Terms of use</span>
        </li>
        <li>
            <a href="../../../dashboard/dashboard-privacy-cookie-policy.php">
                <i class='bx bx-cookie'></i>
                <span class="links_name">Privacy & Cookies Policy</span>
            </a>
            <span class="tooltip">Privacy & Cookies Policy</span>
        </li>
        <li>
            <a href="../../../dashboard/dashboard-credits.php">
                <i class='bx bxs-face'></i>
                <span class="links_name">Credits</span>
            </a>
            <span class="tooltip">Credits</span>
        </li>
        <li>
            <a href="../../../dashboard/dashboard-all-rights-reserved.php">
                <i class='bx bx-check'></i>
                <span class="links_name">All Rights Reserved</span>
            </a>
            <span class="tooltip">All Rights Reserved</span>
        </li>
    </ul>
</div>





<!--page start-->
<?php include '../../../functions/getNewsletterText.php' ?>

<section class="home-section">
    <div class="text">Dashboard - Template</div>
    <!--    ⌝⌝⌝⌝⌝⌝⌝⌝⌝-->

    <BR>

<?php
      $path = "../";
      $pathEnding = "php";

      foreach (glob('../*.php') as $filename) {
          $p = pathinfo($filename);

      }
          ?>


          <!-- <div class="text">
            <h4>Select the file to edit:</h4>
          </div>


          <div class="dropdown">
  <button class="dropbtn">File:</button>
    <div class="dropdown-content">
      <a href="#">project</a>
      <a href="#">project_1</a>
      <a href="#">template</a>
    </div>
  </div> -->

  <br><br>

  <h4 class="text">Title:</h4>

  <br>

  <div class="textarea">
    <textarea id="textarea" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/template/title.txt') ?></textarea>
    <BR>



    <script>
        tinymce.init({
            selector: '#textarea',
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

    <br><br><br>
    <h4 class="text">Data:</h4>
    <br>
    <textarea id="textarea" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/template/data.txt') ?></textarea>
    <BR>



    <script>
        tinymce.init({
            selector: '#textarea',
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
    <br><br><br>


    <h4 class="text">Text:</h4>
    <br>
    <textarea id="textarea" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/template/text.txt') ?></textarea>
    <BR>



    <script>
        tinymce.init({
            selector: '#textarea',
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

    <br><br><br>
    <h4 class="text">Name:</h4>
    <br>
    <textarea id="textarea" class="terms-of-use-textarea"
              placeholder="add some text here (Terms Of Use)"><?php echo getNewsletterText('../files/template/name.txt') ?></textarea>
    <BR>



    <script>
        tinymce.init({
            selector: '#textarea',
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

  </div>

  <br><br><br><br><br>

    <h4 class="text">Images:</h4>

      <br><br><br>

      <h4 class="text">Img 1:</h4>

      <div class="immagine">
        <p id="imgScale1" style="font-size: 18px; margin-left: 15px">First Image</p>
        <img id="currentImage1" class="img1" src="../images/1.jpg">

        <form action="../../../functions/img1.php" method="post" enctype="multipart/form-data">
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

      </div>
        <br><br><br>

      <h4 class="text">Img 2:</h4>
      <div class="immagine">
        <p id="imgScale2" style="font-size: 18px; margin-left: 15px">Second Image</p>
        <img id="currentImage2" class="img2" src="../images/2.jpg">

        <form action="../../../functions/img2.php" method="post" enctype="multipart/form-data">
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

      </div>

          <br><br><br>

      <h4 class="text">Img 3:</h4>

            <br><br><br>


      <h4 class="text">Img 4:</h4>

      <br><br><br>

      <h4 class="text">Img 5:</h4>

      <br><br><br>

      <h4 class="text">Img 6:</h4>

      <br><br><br>


      <h4 class="text">Img 7:</h4>

      <br><br><br>



  </button>
  <a href="../template.php" class="openPageButton">Open Page</a>


<br><br><br>


</section>









<!--page end-->

<script>






function renameFile(oldFileName, newFilename) {

    if (newFilename === "") {
        alert("The link can not be empty!");
        window.location.reload();
        return;
    } else if (newFilename === oldFileName) {
        return;
    }

    $.ajax({
        url: "../functions/renameFile.php",
        type: "POST",
        data: {functionCall: "renameFile", oldImageName: oldFileName, newImageName: newFilename},
        success: function (result) {
            // window.localStorage.clear();
            window.location.reload();
        }
    });
}





function copy() {
      $.ajax({
           type: "POST",
           url: '../functions/copy_file.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }






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

</script>
</body>
</html>
