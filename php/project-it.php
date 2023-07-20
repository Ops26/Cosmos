<!DOCTYPE html PUBLIC>
<html xmlns="https://cosmosarchitecture.com/XHTML">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Progetti - Cosmos Architecture</title>
        <link rel="stylesheet" href="../css/style (2).css">
        <link rel="stylesheet" href="../css/mobile1.css">
        <link rel="stylesheet" href="../css/mobile.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/header.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>

        <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    </head>
    <body>
    <header>

<?php include '../functions/getMenuItems.php'; ?>
<?php include '../functions/getSocialMediaLinks.php'; ?>

  <section class="head">
    <div class="social">



        <ul>
            <li><a href='<?php echo getSocialMediaLink("instagram", "../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                    style="width: 20px; height: 20px; "
                                                                                                                    src="../dashboard/icons/instagram-logo.png"></a>
            </li>
            <li><a href='<?php echo getSocialMediaLink("twitter", "../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                  style="width: 20px; height: 20px; "
                                                                                                                  src="../dashboard/icons/twitter-logo.png"></a>
            </li>
            <li><a href='<?php echo getSocialMediaLink("facebook", "../files/social-media-links.txt"); ?>' target="
              "><img alt
                                                                                                                   style="width:20px; height: 20px;"
                                                                                                                   src="../dashboard/icons/facebook-logo.png"></a>
            </li>
            <li><a href='<?php echo getSocialMediaLink("linkedin", "../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                   style="width: 20px; height: 20px; "
                                                                                                                   src="../dashboard/icons/linkedin-logo.png"></a>
            </li>
          </ul>

    </div>

    <div class="lingue">
  <!-- Menù orizzontale per schermi più grandi -->
  <ul class="lingue-horizontal">
    <li><a href="project.php" >EN</a></li>
    <li><a href="project-esp.php" class="no-active">ES</a></li>
    <li><a href="project-it.php" class="no-active">IT</a></li>
    <li><a href="project-ch.php" class="no-active">CH</a></li>
    <li><a href="project-ar.php" class="no-active">AR</a></li>
  </ul>

  <!-- Menù a tendina per dispositivi mobili -->
  <div class="lingue-dropdown">
    <select onchange="window.location.href = this.value;">
      <option value="#">Select Language</option>
      <option value="project.php">EN</option>
      <option value="project-esp.php">ES</option>
      <option value="project-it.php">IT</option>
      <option value="project-ch.php">CH</option>
      <option value="project-ar.php">AR</option>
    </select>
  </div>
</div>

  </section>




  <a href="../home-it.php"><img style="height: 10vh; width: auto" src="../dashboard/icons/logo.png"


                                                                                            class="logo"></a>
  <div class="menu">
    <nav>
        <div class="nav-lns" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#"><?php echo getMenuItems("1", "../files/it/menu-items-it.txt") ?></a></li>

                <li><a href="it/estudio-it.php"><?php echo getMenuItems("2", "../files/it/menu-items-it.txt") ?></a>
                </li>
                <li><a href="contacto-it.php"><?php echo getMenuItems("3", "../files/it/menu-items-it.txt") ?></a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  </div>


</header>

        <nav>
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Tutti</button>
                <button class="btn" onclick="filterSelection('architecture')"> Architettura</button>
                <button class="btn" onclick="filterSelection('interior')">Interni</button>
                <button class="btn" onclick="filterSelection('urbanism')"> Urbanismo</button>
                <!-- <button class="btn" onclick="filterSelection('rehabilitacon')"> Rehabilitacon</button> -->
               </div>



        </nav>


        <section class="gallery">


                       <div class="container">

                              <a href="project/arc/COT.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/1/COT_01.jpg" class="img1">

                                    <p class="titolo_conta" style="font-size: 16px;">COT_VIVIENDA UNIFAMILIAR EN EL RETIRO</p>
                        </div></a>
                       </div>
                       <div class="container">

                              <a href="project/arc/CTL.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/2/CTL_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">CTL_VIVIENDA UNIFAMILIAR EN MIAMI</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/FOS.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/3/FOS_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">FOS_EDIFICIO RESIDENCIAL EN FOSHAN </p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/PAN.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/4/PAN_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">PAN_PANGORUM HOTEL EVASIÓN</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/PSN.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/5/PSN_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">PSN_6 VIVIENDAS EN VERONA</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/PVL.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/6/PVL_00.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">PVL_SHISHI OFICINAS CENTRALES</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/ROC.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/7/ROC_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">ROC_COMPLEJO RESIDENCIAL DE 84 VIVIENDAS</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/SNG.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/8/SNG_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">SNG_VIVIENDA UNIFAMILIAR EN SAINT LOUIS</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/arc/UHC.php"><div class="filterDiv architecture"><img src="../images/img-project/arc/9/UHC_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">UHC_URBANIZACIÓN HOGAR CARIBE</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>







                       <!--- FINE ARCHITETTURA INIZIO INTERNI -->





                       <div class="container">

                              <a href="project/int/ADP.php"><div class="filterDiv interior"><img src="../images/img-project/int/10/ADP_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">ADP_APARTAMENTO EN LA MARINA</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/ALW.php"><div class="filterDiv interior"><img src="../images/img-project/int/11/ALW_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">ALW_ESPACIO DEPORTIVO</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/ALX.php"><div class="filterDiv interior"><img src="../images/img-project/int/12/ALX_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">ALX_VINOTECA</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/BBN.php"><div class="filterDiv interior"><img src="../images/img-project/int/13/BBN_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">BBN_BONHO BY LA TORRE</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/BRM.php"><div class="filterDiv interior"><img src="../images/img-project/int/14/BRM_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">BRM_APARTAMENTO EN CHAMBERÍ</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/EDB.php"><div class="filterDiv interior"><img src="../images/img-project/int/15/EDB_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">EDB_TECNICA RURAL OFICINAS CENTRALES</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/FEC.php"><div class="filterDiv interior"><img src="../images/img-project/int/16/FEC_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">FEC_APARTAMENTO EN LA CIUDAD</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/FIR.php"><div class="filterDiv interior"><img src="../images/img-project/int/17/FIR_01.png" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">FIR_CASA EN ZIBO</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/GSV.php"><div class="filterDiv interior"><img src="../images/img-project/int/18/GSV_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">GSV_APARTAMENTO EN LAS LETRAS</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/int/JMZ.php"><div class="filterDiv interior"><img src="../images/img-project/int/19/JMZ_05.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px;">ZETA_APARTAMENTO EN VIVEROS</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>








                       <!-- FINE INTERNI INIZIO URBANISMO -->







                       <div class="container">

                              <a href="project/urb/CST.php"><div class="filterDiv urbanism"><img src="../images/img-project/urb/20/1.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px; text-transform: uppercase;">CST_Build to Rent Castropol</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/urb/HGD.php"><div class="filterDiv urbanism"><img src="../images/img-project/urb/21/HGD_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px; text-transform: uppercase;">HGD_Concurso Higold oficinas centrales</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/urb/LAC.php"><div class="filterDiv urbanism"><img src="../images/img-project/urb/22/LAC_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px; text-transform: uppercase;">LAC_Complejo Sanitario en el Lago Rosa</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/urb/LAN.php"><div class="filterDiv urbanism"><img src="../images/img-project/urb/23/LAN_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px; text-transform: uppercase;">LAN_Complejo turistico en Saint Louis</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/urb/MAW.php"><div class="filterDiv urbanism"><img src="../images/img-project/urb/24/MAW_01.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px; text-transform: uppercase;">MAW_Concuro Edificio residencial en Riad</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>
                       <div class="container">

                              <a href="project/urb/ECO.php"><div class="filterDiv urbanism"><img src="../images/img-project/urb/25/1.jpg" class="img1"></a>
                                  <p class="titolo_conta" style="font-size: 16px; text-transform: uppercase;">ECO_SALINAS HOTEL LAS SALINAS</p>
                          <!-- <p class="sotto_conta">private luxury building</p> -->
                          </div>
                       </div>


        </section>


<!--
<div class="space">

</div>

-->
<!--
<section class="footer">

  <div class="footer-basic" style="margin-top: 50vh !important">


          <div style="text-align: center; margin-bottom: 29px">
              <a href="../home.php"><img style="height: 10vh; width: auto" src="../dashboard/icons/logo.png" alt="company logo"></a>
          </div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="en/terms-of-use-en.php" target="_blank">Terms of use</a></li>
              <li class="list-inline-item"><a href="en/privacy-cookie-policy-en.php" target="_blank">Privacy & Cookies Policy</a></li>
              <li class="list-inline-item"><a href="en/credits-en.php" target="_blank">Credits</a></li>
              <li class="list-inline-item"><a href="en/all-rights-reserved-en.php" target="_blank">All Rights Reserved</a></li>
          </ul>

  </div>

</section>
-->




       <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.left="0";
            }
            function hideMenu(){
                navLinks.style.left="-200px";
            }
        </script>
        <script>
            filterSelection("all")
           function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
           }


           // Show filtered elements
           function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
            }
            }
           }



           // Hide elements that are not selected
           function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
            }
            element.className = arr1.join(" ");
           }



           // Add active class to the current control button (highlight it)
           var btnContainer = document.getElementById("myBtnContainer");
           var btns = btnContainer.getElementsByClassName("btn");
           for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
            });
           }
           ScrollReveal().reveal('.headline', { distance: '100px',duration: 1500,interval: 400 } );
           </script>
        </body>

    </html>
