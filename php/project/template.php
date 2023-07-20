<!DOCTYPE html PUBLIC>
<html xmlns="https://cosmosarchitecture.com/XHTML">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>cosmos architecture</title>
        <link rel="stylesheet" href="css-project/project_1.css">
        <link rel="stylesheet" href="../../css/mobile.css">
        <link rel="stylesheet" href="../../css/footer.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <header>


          <?php include '../../functions/getSocialMediaLinks.php'; ?>
          <?php include '../../functions/getMenuItems.php'; ?>
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
                                                                                                                           style="width:28px; height: 20px;"
                                                                                                                           src="../../dashboard/icons/facebook-logo.png"></a>
                    </li>
                    <li><a href='<?php echo getSocialMediaLink("linkedin", "../../files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                           style="width: 18px; height: 18px; "
                                                                                                                           src="../../dashboard/icons/linkedin-logo.png"></a>
                    </li>
                  </ul>

            </div>



          </section>




  <a href="../../home.php"><img src="../../dashboard/icons/logo.svg" class="logo"></a>

  <div class="menu">
    <nav>
        <div class="nav-lns" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul class="test">
                <li><a href="../project.php"><?php echo getMenuItems("1", "../../files/menu-items.txt") ?></a>
                </li>

                <li>
                    <a href="../en/estudio-en.php"><?php echo getMenuItems("3", "../../files/menu-items.txt") ?></a>
                </li>
                <li>
                    <a href="../contacto.php"><?php echo getMenuItems("4", "../../files/menu-items.txt") ?></a>
                </li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  </div>

</header>


<!--           NEW           -->
<section class="container">
  <div class="left">
    <div class="title">
      <h1>Inserire testo</h1>
    </div>

    <div class="data">
      <h4><span>Client:</span> Inserire testo </h4>
      <h4><span>Date:</span> Inserire testo </h4>

    </div>

    <div class="txt">
      <p>The project is a luxury building located in Guangdong province, in the south of China. An extremely productive area with a great future prospective.<br><br>


Starting from an existing structure, the facade design is peculiar because thanks to ultra-light ceramic panels there is the possibility of making the facade movable by closing and opening the openings. A perforated mesh covers the volume which contains vertical connections, elevators and stairs.<br><br>

The luxury building is about 1900 sqmand it will contain luxurious apartments and a Penthouse with a view of the adjacent ancient city. The project belongs to a building restoration plan promoted by an investment group with the aim to redesign several buildings in high quality design.


</p>
    </div>

    <div class="people">
      <h5>Architect</h5>
      <p>Ramon Esteve</p>
      <br>

      <h5>Collaborating Architects</h5>
      <p>Anna Boscà</p>
      <p>Victor Ruiz</p>

      <br>
      <h5>Architect</h5>
      <p>Ramon Esteve</p>
      <br>

      <h5>Collaborating Architects</h5>
      <p>Anna Boscà</p>
      <p>Victor Ruiz</p>

      <br>
      <h5>Architect</h5>
      <p>Ramon Esteve</p>
      <br>

      <h5>Collaborating Architects</h5>
      <p>Anna Boscà</p>
      <p>Victor Ruiz</p>
    </div>

  </div>

  <div class="right">
    <div class="img1">
    <a href="images/1.jpg" data-lightbox="mygallery"><img src="images/1.jpg" alt=""></a>
    </div>
    <div class="img2">
      <a href="images/2.jpg" data-lightbox="mygallery"><img src="images/2.jpg" alt=""></a>
    </div>
    <div class="img3">
      <a href="images/3.jpg" data-lightbox="mygallery"><img src="images/3.jpg" alt=""></a>
    </div>
    <div class="img4">
      <a href="images/4.jpg" data-lightbox="mygallery"><img src="images/4.jpg" alt=""></a>
    </div>


  </div>


</section>


<section class="gallery">
  <div class="row">
    <div class="column">
        <a href="images/5.jpg" data-lightbox="mygallery"><img src="images/5.jpg" alt=""></a>
    </div>
    <div class="column">
        <a href="images/6.jpg" data-lightbox="mygallery"><img src="images/6.jpg" alt=""></a>
    </div>
    <div class="column">
        <a href="images/7.jpg" data-lightbox="mygallery"><img src="images/7.jpg" alt=""></a>
    </div>

  </div>

</section>

<section class="container_btn">
  <div class="center_btn">
    <a href="../project.php"><button>All Projects</button></a>
  </div>
</section>










<!-- WARNING


  <div class="container_btn">
  <div class="center_btn">
    <a href="../pages/project.php"><button>All Project</button></a>
  </div>
</div> -->



  <div class="footer-basic" style="margin-top: 0 !important">
      <footer>

          <div style="text-align: center; margin-bottom: 29px">
              <a href="../../home.php"><img src="../../dashboard/icons/logo.svg" alt="company logo"></a>
          </div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="../en/terms-of-use-en.php" target="_blank">Terms of use</a></li>
              <li class="list-inline-item"><a href="../en/privacy-cookie-policy-en.php" target="_blank">Privacy & Cookies Policy</a></li>
              <li class="list-inline-item"><a href="../en/credits-en.php" target="_blank">Credits</a></li>
              <li class="list-inline-item"><a href="../en/all-rights-reserved-en.php" target="_blank">All Rights Reserved</a></li>
          </ul>
      </footer>
  </div>







        <script>



        // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.left="0";
            }
            function hideMenu(){
                navLinks.style.left="-200px";
            }
            ScrollReveal().reveal('.headline', { distance: '100px',duration: 1500,interval: 400 } );


            var modal = document.getElementById("myModal");


var img = document.getElementById("myImg");
var img2 = document.getElementById("myImg2");
var img3 = document.getElementById("myImg3");
var img4 = document.getElementById("myImg4");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
img4.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}


var span = document.getElementsByClassName("close")[0];


span.onclick = function() {
  modal.style.display = "none";
}




        </script>
    </body>
</html>
