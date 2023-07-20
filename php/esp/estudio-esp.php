<!DOCTYPE html PUBLIC>
<html>
<!--<html xmlns="https://cosmosarchitecture.com/XHTML">-->
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Estudio - Cosmos Architecture</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap"
          rel="stylesheet">
            <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/estudio.css">
    <link rel="stylesheet" href="../../css/mobile.css">
    <link rel="stylesheet" href="../../css/footer.css">

    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">

</head>
<body>
<header>


        <?php include '../../functions/getMenuItems.php'; ?>
        <?php include '../../functions/getSocialMediaLinks.php'; ?>
        <section class="head">
          <div class="social">



              <ul>
                  <li><a href='<?php echo getSocialMediaLink("instagram", "../../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                          style="width: 20px; height: 20px; "
                                                                                                                          src="../../dashboard/icons/instagram-logo.png"></a>
                  </li>
                  <li><a href='<?php echo getSocialMediaLink("twitter", "../../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                        style="width: 20px; height: 20px; "
                                                                                                                        src="../../dashboard/icons/twitter-logo.png"></a>
                  </li>
                  <li><a href='<?php echo getSocialMediaLink("facebook", "../../files/social-media-links.txt"); ?>' target="
                    "><img alt
                                                                                                                         style="width: 20px; height: 20px;"
                                                                                                                         src="../../dashboard/icons/facebook-logo.png"></a>
                  </li>
                  <li><a href='<?php echo getSocialMediaLink("linkedin", "../../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                         style="width: 20px; height: 20px; "
                                                                                                                         src="../../dashboard/icons/linkedin-logo.png"></a>
                  </li>
                </ul>

          </div>

          <div class="lingue">
  <!-- Menù orizzontale per schermi più grandi -->
  <ul class="lingue-horizontal">
    <li><a href="../en/estudio-en.php" >EN</a></li>
    <li><a href="../esp/estudio-esp.php" class="no-active">ES</a></li>
    <li><a href="../it/estudio-it.php" class="no-active">IT</a></li>
    <li><a href="../ch/estudio-ch.php" class="no-active">CH</a></li>
    <li><a href="../ar/estudio-ar.php" class="no-active">AR</a></li>
  </ul>

  <!-- Menù a tendina per dispositivi mobili -->
  <div class="lingue-dropdown" style="margin-top: 3vh">
    <select onchange="window.location.href = this.value;">
      <option value="#">Select Language</option>
      <option value="../en/estudio-en.php">EN</option>
      <option value="../esp/estudio-esp.php">ES</option>
      <option value="../it/estudio-it.php">IT</option>
      <option value="../ch/estudio-ch.php">CH</option>
      <option value="../ar/estudio-ar.php">AR</option>
    </select>
  </div>
</div>

        </section>


    <a href="../../home-esp.php"><img style="height: 10vh; width: auto;" src="../../dashboard/icons/logo.png"
                                                                                              class="logo"></a>
    <div class="menu">
      <nav>
          <div class="nav-lns" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                  <li><a href="../project-esp.php"><?php echo getMenuItems("1", "../../files/esp/menu-items-esp.txt") ?></a></li>

                  <li><a href="estudio-esp.php"><?php echo getMenuItems("2", "../../files/esp/menu-items-esp.txt") ?></a></li>
                  <li><a href="../contacto-esp.php"><?php echo getMenuItems("3", "../../files/esp/menu-items-esp.txt") ?></a></li>
              </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
    </div>
</header>
<div class="hero">

    <?php include '../../functions/getEstudioVideoInforamtion.php' ?>


    <video autoplay muted loop >
      <source src="../../estudio-video/video-estudio.mp4" type="video/mp4">
    </video>
</div>

<?php include '../../functions/getEstudioText.php' ?>

<section class="txt headline">
    <?php echo getEstudioText('../../files/esp/estudio-esp.txt') ?>

    <br><br>
    <h4>Contáctanos</h4>
</section>

<!--
<section class="row headline">


    <div class="campus-col">
        <div><img src="../../images/img-members/03_DAVID.png">

            <div class="layer">
                <ul>
                    <h3>DAVID SASTRE MATA</h3>
                    <p>Partner - Architect</p>
                    <a href="https://www.linkedin.com/in/david-sastre-mata-30884648/?originalSubdomain=es" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                    <a href="mailto: david.sastre@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>

                </ul>
            </div>
        </div>
    </div>
    <div class="campus-col">
        <div><img src="../../images/img-members/02_PIETRO.png">
            <div class="layer">
              <ul>
                  <h3>PIETRO PAOLO SPEZIALE</h3>
                  <p>Partner - Architect</p>
                  <a href="https://www.linkedin.com/in/pietropaolospeziale/" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                  <a href="mailto: pietropaolo.speziale@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>

              </ul>
            </div>
        </div>
    </div>

    <div class="campus-col">
        <div><img src="../../images/img-members/01_JUAN MARTINEZ.png">
            <div class="layer">
              <ul>
                  <h3>JUAN MARTÍNEZ ZAFRA</h3>
                  <p>Partner - Architect</p>
                  <a href="https://www.linkedin.com/in/juan-martinez-zafra/" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                  <a href="mailto: juan.zafra@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>

              </ul>
            </div>
        </div>
    </div>
    <div class="campus-col">
        <div><img src="../../images/img-members/04_TOMAS.png">
            <div class="layer">
              <ul>
                  <h3>TOMÁS VILLA ARANGO</h3>
                  <p>Partner - Architect</p>
                  <a href="https://www.linkedin.com/in/tomasvillaa/" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                  <a href="mailto: tomas.villa@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>

              </ul>
            </div>
        </div>
    </div>
</section>
-->
<div class="main">

        <div class="container">
            <div class="card">
                <img src="../../images/img-members/01_JUAN MARTINEZ.png">
                <div class="details">
                    <h3>JUAN MARTÍNEZ ZAFRA</h3>
                    <p>Partner - Architect</p>
                    <div class="social-links">
                      <a href="https://www.linkedin.com/in/juan-martinez-zafra/" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                      <a href="mailto: juan.zafra@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="../../images/img-members/02_PIETRO.png">
                <div class="details">
                    <h3>PIETRO PAOLO SPEZIALE</h3>
                    <p>Partner - Architect</p>
                    <div class="social-links">
                      <a href="https://www.linkedin.com/in/pietropaolospeziale/" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                      <a href="mailto: pietropaolo.speziale@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="../../images/img-members/03_DAVID.png">
                <div class="details">
                    <h3>DAVID SASTRE MATA</h3>
                    <p>Partner - Architect</p>
                    <div class="social-links">
                      <a href="https://www.linkedin.com/in/david-sastre-mata-30884648/?originalSubdomain=es" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                      <a href="mailto: david.sastre@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="../../images/img-members/04_TOMAS.png">
                <div class="details">
                    <h3>TOMÁS VILLA ARANGO</h3>
                    <p>Partner - Architect</p>
                    <div class="social-links">
                      <a href="https://www.linkedin.com/in/tomasvillaa/" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>

                      <a href="mailto: tomas.villa@cosmosarchitecture.com" class="email"><i class="fa-solid fa-envelope "></i></a>

                    </div>
                </div>
            </div>

            <!--riferimento-->

            
        </div>
    </div>

<br><br>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-df1e1e09-00f8-49af-85b8-914b1f72839c"></div>


<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.left = "0";
    }

    function hideMenu() {
        navLinks.style.left = "-200px";
    }

    ScrollReveal().reveal('.headline', {distance: '150px', duration: 1500, interval: 400});
</script>

<div class="footer-basic" style="margin-top: 20vh">
    <footer>

        <div style="text-align: center; margin-bottom: 29px">
            <a href="../../home.php"><img style="height: 10vh; width: auto;" src="../../dashboard/icons/logo.png" alt="company logo"></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="terms-of-use-esp.php" target="_blank">Condiciones de uso</a></li>
            <li class="list-inline-item"><a href="privacy-cookie-policy-esp.php" target="_blank">Política de privacidad y cookies</a></li>
            <li class="list-inline-item"><a href="credits-esp.php" target="_blank">Créditos</a></li>
            <li class="list-inline-item"><a href="all-rights-reserved-esp.php" target="_blank">Reservados todos los derechos</a></li>
        </ul>
    </footer>
</div>
</body>
</html>
