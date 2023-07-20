<!DOCTYPE html PUBLIC>
<!--<html xmlns="https://cosmosarchitecture.com/XHTML">-->
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>cosmos architecture</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../../css/newsletter-design.css">
    <link rel="stylesheet" href="../../css/newsletter-mobile.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
</head>
<body>
<header>
    <div class="socinsta">

        <?php include '../../functions/getSocialMediaLinks.php'; ?>
        <?php include '../../functions/getMenuItems.php'; ?>
        <?php include '../../functions/getNewsletterDate.php' ?>
        <?php include '../../functions/getNewsletterText.php' ?>

        <ul>
            <li><a href='<?php echo getSocialMediaLink("instagram", "../../files/social-media-links.txt"); ?>'><img alt
                                                                                                                    style="width: 20px; height: 20px; margin-top: 5.7px; margin-left: 0px;"
                                                                                                                    src="../../dashboard/icons/instagram-logo.png"></a>
            </li>
            <li><a href='<?php echo getSocialMediaLink("twitter", "../../files/social-media-links.txt"); ?>'><img alt
                                                                                                                  style="width: 20px; height: 20px; margin-top: 5.7px; margin-left: 0px;"
                                                                                                                  src="../../dashboard/icons/twitter-logo.png"></a>
            </li>
            <li><a href='<?php echo getSocialMediaLink("facebook", "../../files/social-media-links.txt"); ?>'><img alt
                                                                                                                   style="width:28px; height: 20px; margin-top: 6px; margin-left: 0px;"
                                                                                                                   src="../../dashboard/icons/facebook-logo.png"></a>
            </li>
            <li><a href='<?php echo getSocialMediaLink("linkedin", "../../files/social-media-links.txt"); ?>'><img alt
                                                                                                                   style="width: 18px; height: 18px; margin-top: 6px; margin-left: 0px;"
                                                                                                                   src="../../dashboard/icons/linkedin-logo.png"></a>
            </li>
            <div class="band">
                <ul>
                    <li><a href="../en/newsletter-en.php"><img alt
                                         style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px; "
                                         src="../../images/img-flags/flag-of-United-Kingdom.png"></a>
                    </li>
                    <li><a href="../esp/newsletter-esp.php"><img alt
                                                                 style="width:15px; height: 15px; margin-top: 6px; margin-left: 0px;"
                                                                 src="../../images/img-flags/flag-of-Spain.png"></a>
                    </li>
                    <li><a href="../it/newsletter-it.php"><img alt
                                                               style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px;"
                                                               src="../../images/img-flags/flag-of-Italy.png"></a>
                    </li>
                    <li><a href="../ch/newsletter-ch.php"><img alt
                                                               style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px; "
                                                               src="../../images/img-flags/flag-of-China.png"></a>
                    </li>
                    <li><a href="#"><img alt
                                                               style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px; border-radius: 10px"
                                                               src="../../images/img-flags/flag-of-Arabia.png"></a>
                    </li>
                </ul>
            </div>


        </ul>
    </div>

    <img src="../../dashboard/icons/logo.svg" class="logo">
    <nav>
        <div class="nav-lns" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li>
                    <a href="../project.php"><?php echo getMenuItems("1", "../../files/menu-items.txt") ?></a>
                </li>
                <li>
                    <a href="newsletter-ar.php"><?php echo getMenuItems("2", "../../files/menu-items.txt") ?></a>
                </li>
                <li>
                    <a href="estudio-ar.php"><?php echo getMenuItems("3", "../../files/menu-items.txt") ?></a>
                </li>
                <li>
                    <a href="../contacto.php"><?php echo getMenuItems("4", "../../files/menu-items.txt") ?></a>
                </li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</header>
<section class="sec1">

</section>
<div class="testo-col1">
    <h4>
        BLOG<br>
        <?php echo getNewsletterDate("../../files/ar/newsletter-date-ar.txt") ?>
    </h4></div>

<div class="testo-col" style="margin: 0 auto; text-align: right;">
    <p>
        <?php echo getNewsletterText("../../files/ar/newsletter-text-ar.txt") ?>
    </p>
</div>

<div class="otherimage">
  <section class="imageextra">

  </section>
  <section class="imageextra2">

  </section>
</div>

<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.left = "0";
    }

    function hideMenu() {
        navLinks.style.left = "-200px";
    }
</script>

<div class="footer-basic">
    <footer>

        <div style="text-align: center; margin-bottom: 29px">
            <img src="../../dashboard/icons/logo.svg">
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="../en/terms-of-use-en.php" target="_blank">Terms of use</a></li>
            <li class="list-inline-item"><a href="../en/privacy-cookie-policy-en.php" target="_blank">Privacy & Cookies Policy</a></li>
            <li class="list-inline-item"><a href="../en/credits-en.php" target="_blank">Credits</a></li>
            <li class="list-inline-item"><a href="../en/all-rights-reserved-en.php" target="_blank">All Rights Reserved</a></li>
        </ul>
    </footer>
</div>
</body>
</html>
