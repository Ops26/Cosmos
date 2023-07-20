<!DOCTYPE html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Homepage - Cosmos Architecture</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">

     <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>
<body>
<header>

  <?php include 'functions/getMenuItems.php'; ?>
  <?php include 'functions/getSocialMediaLinks.php'; ?>

    <section class="head">
      <div class="social">



          <ul>
              <li><a href='<?php echo getSocialMediaLink("instagram", "files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                      style="width: 20px; height: 20px; "
                                                                                                                      src="dashboard/icons/instagram-logo.png"></a>
              </li>
              <li><a href='<?php echo getSocialMediaLink("twitter", "files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                    style="width: 20px; height: 20px; "
                                                                                                                    src="dashboard/icons/twitter-logo.png"></a>
              </li>
              <li><a href='<?php echo getSocialMediaLink("facebook", "files/social-media-links.txt"); ?>' target="
                "><img alt
                                                                                                                     style="width:20px; height: 20px;"
                                                                                                                     src="dashboard/icons/facebook-logo.png"></a>
              </li>
              <li><a href='<?php echo getSocialMediaLink("linkedin", "files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                     style="width: 20px; height: 20px; "
                                                                                                                     src="dashboard/icons/linkedin-logo.png"></a>
              </li>
            </ul>

      </div>

      <div class="lingue">
        <ul >
                      <li><a href="#" ><!-- <img alt
                                                              style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px;"
                                                              src="../../images/img-flags/flag-of-United-Kingdom.png">-->EN</a>
                      </li>
                      <li><a href="home-esp.php" class="no-active"><!-- <img alt
                                                                style="width:15px; height: 15px; margin-top: 6px; margin-left: 0px;"
                                                                src="../../images/img-flags/flag-of-Spain.png">--> ES</a>
                      </li>
                      <li><a href="home-it.php"  class="no-active"><!-- <img alt
                                           style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px; border-radius: 10px"
                                           src="../../images/img-flags/flag-of-Italy.png">--> IT</a>
                      </li>
                      <li><a href="home-ch.php"  class="no-active"><!-- <img alt
                                                              style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0;"
                                                              src="../../images/img-flags/flag-of-China.png">--> CH</a>
                      </li>
                      <li><a href="home-ar.php"  class="no-active"><!-- <img alt
                                                              style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0;"
                                                              src="../../images/img-flags/flag-of-Arabia.png">--> AR</a>
                      </li>
                    </ul>
      </div>

    </section>




    <a href="#"><img style="height: 10vh; width: auto" src="dashboard/icons/logo.png"


                                                                                              class="logo"></a>
    <div class="menu">
      <nav>
          <div class="nav-lns" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                  <li><a href="php/project.php"><?php echo getMenuItems("1", "files/menu-items.txt") ?></a></li>

                  <li><a href="php/en/estudio-en.php"><?php echo getMenuItems("2", "files/menu-items.txt") ?></a>
                  </li>
                  <li><a href="php/contacto.php"><?php echo getMenuItems("3", "files/menu-items.txt") ?></a></li>
              </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
    </div>


</header>

<section class="first_section">
    <h1 class="title">Cosmos Architecture</h1>


</section>


<br><br><br><br>

<section class="works">

    <h3>What we do</h3>
    <div class="row justify-content-center">
        <div class="column">   
            <img src="images/img-home/residential.png">
            <h5 >Residential Development</h5>
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae dignissimos sed, perferendis voluptate modi quia nostrum cum ad sint, distinctio nesciunt voluptatibus? Eius, sit veritatis facere asperiores exercitationem hic?</p>

        </div>
        <div class="column">
            <img src="images/img-home/residential.png">
            <h5>Commercial Development</h5>
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae dignissimos sed, perferendis voluptate modi quia nostrum cum ad sint, distinctio nesciunt voluptatibus? Eius, sit veritatis facere asperiores exercitationem hic?</p>

        </div>
        <div class="column">
            <img src="images/img-home/residential.png">
            <h5 >Residential Development</h5>
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia recusandae dignissimos sed, perferendis voluptate modi quia nostrum cum ad sint, distinctio nesciunt voluptatibus? Eius, sit veritatis facere asperiores exercitationem hic?</p>
        </div>

    </div>

</section>

<br><br>

<section class="about">

    <div class="text">
    <h3>ABOUT US</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium ab vitae molestiae delectus odio mollitia possimus itaque, totam sed, beatae architecto neque saepe ea dolore alias dolor harum provident iure!</p>
    <a href="php/en/estudio-en.php"><button>DISCOVER MORE  <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></button></a> 
    </div>

    <div class="about_img">
        <img src="../images/img-home/1.jpg">
    </div>

</section>

<br><br><br><br>

<section class="latest">

    <div class="latest_title">
        <div class="left_title">
            <h3>LATEST DEVELOPMENT</h3>
        </div>
        <div class="right_title">
            <a href="php/project.php"><button>VIEW ALL <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 10px"></i></button></a>
        </div>
    </div>

    <div class="development">
        <div class="grid-container">
            <div class="grid-item">
                <img src="images/img-project/arc/1/COT_01.jpg">
                <br><br>
                <h6>COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</h6>
                <br>
                <a href="php/project/arc/COT.php">VIEW <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></a>
            </div>
            <div class="grid-item"><img src="images/img-project/arc/1/COT_01.jpg">
                <br><br>
                <h6>COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</h6>
                <br>
                <a href="php/project/arc/COT.php">VIEW <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></a></div>
            <div class="grid-item"><img src="images/img-project/arc/1/COT_01.jpg">
                <br><br>
                <h6>COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</h6>
                <br>
                <a href="php/project/arc/COT.php">VIEW <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></a></div>
            <div class="grid-item"><img src="images/img-project/arc/1/COT_01.jpg">
                <br><br>
                <h6>COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</h6>
                <br>
                <a href="php/project/arc/COT.php">VIEW <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></a></div>
            <div class="grid-item"><img src="images/img-project/arc/1/COT_01.jpg">
                <br><br>
                <h6>COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</h6>
                <br>
                <a href="php/project/arc/COT.php">VIEW <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></a></div>
            <div class="grid-item"><img src="images/img-project/arc/1/COT_01.jpg">
                <br><br>
                <h6>COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</h6>
                <br>
                <a href="php/project/arc/COT.php">VIEW <i class="fa-solid fa-arrow-right" style="color: #000000; margin-left: 5px"></i></a></div>
        </div>
    </div>

</section>

<br><br>

  




<div class="footer-basic" style="margin-top: 0 !important">
    <footer>

        <div style="text-align: center; margin-bottom: 29px">
            <img style="height: 10vh; width: auto" src="dashboard/icons/logo.png" alt="company logo">
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="php/en/terms-of-use-en.php" target="_blank">Terms of use</a></li>
            <li class="list-inline-item"><a href="php/en/privacy-cookie-policy-en.php" target="_blank">Privacy & Cookies Policy</a></li>
            <li class="list-inline-item"><a href="php/en/credits-en.php" target="_blank">Credits</a></li>
            <li class="list-inline-item"><a href="php/en/all-rights-reserved-en.php" target="_blank">All Rights Reserved</a></li>
        </ul>
    </footer>
</div>

</body>
</html>

