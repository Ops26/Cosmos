

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
    <link rel="stylesheet" href="../css/dashboard-project.css">
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
            <a href="#">
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
<section class="projects" style="margin-left: 8%">

    <h1 style="padding-top: 5vh">Create new project</h1>

    <form method="POST" action="../functions/new-project.php" enctype="multipart/form-data">


        <label>Abbreviation:</label>
        <input type="text" name="abb" placeholder="COT" required>

        
        <br><br>
        <label>Background Image:</label>
        <input type="file" name="back-image" accept="image/png" required>
        <br><br>

        <label>Title:</label>
        <input type="text" name="title" required>

        <br><br>

        <label for="desc">Description:</label>
        <br><br>
        <textarea id="desc" name="desc" rows="10" cols="50" required></textarea>

        <br><br>

        <label for="desc">Description in Spanish:</label>
        <br><br>
        <textarea id="desc_esp" name="desc_esp" rows="10" cols="50" required></textarea>
        <br><br>

        <label for="desc">Description in Italian:</label>
        <br><br>
        <textarea id="desc_it" name="desc_it" rows="10" cols="50" required></textarea>
        <br><br>

        <label for="desc">Description in Chinese:</label>
        <br><br>
        <textarea id="desc_ch" name="desc_ch" rows="10" cols="50" required></textarea>

        <br><br>

        <label for="desc">Description in Arabic:</label>
        <br><br>
        <textarea id="desc_ar" name="desc_ar" rows="10" cols="50" required></textarea>

        <br><br>
        <label>Other Images:</label>
        <br><br>
        <input type="file" name="img1" accept="image/png" required>
        <br>
        <input type="file" name="img2" accept="image/png" required>
        <br>
        <input type="file" name="img3" accept="image/png" required>
        <br>
        <input type="file" name="img4" accept="image/png" required>

        <br><br>

        <label>Location:</label>
        <input id="loc" name="loc" required placeholder="Spain">

        <br><br>

        <label>Area:</label>
        <input id="area" name="area" required placeholder="500">

        <br><br>

        <label>Collaborating Architects:</label>
        <br><br>
        <textarea id="arc" name="arc" rows="10" cols="50" wrap="soft"required placeholder="After every name put <br>"></textarea>

        <br><br>

        <label>External Architects:</label>
        <br><br>
        <textarea id="ext" name="ext" rows="10" cols="50" required placeholder="After every name put <br>, if none put -"></textarea>
        
        <br><br>

        <label>Rendering:</label>
        <br><br>
        <textarea id="rend" name="rend" rows="10" cols="50" required placeholder="After every name put <br>, if none put -"></textarea>
        
        <br><br>

        <label>Map:</label>
        <input style="width: 500px" type="text" name="map" placeholder="Put the link only">
        <br><br>

        <input type="submit" name="submit" value="Create new project" style="margin-top: 5vh; border: none; background-color: #06f; width: 200px; height: 45px; color: white; cursor: pointer; font-size: 16px">

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



function renameFiledashboard(oldDashboardName, newDashboardName) {

    if (newDashboardName === "") {
        alert("The link can not be empty!");
        window.location.reload();
        return;
    } else if (newDashboardName === oldDashboardName) {
        return;
    }

    $.ajax({
        url: "../functions/renameFiledashboard.php",
        type: "POST",
        data: {functionCall: "renameFiledashboard", oldDashName: oldDashboardName, newDashName: newDashboardName},
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
