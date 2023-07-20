<?php



if (isset($_POST['abb'])) {
    $file_name = $_POST['abb'];
    $estensione = ".php"; 
    $nome_file_con_estensione = $file_name . $estensione;
    $percorso_file = "../php/project/new_project/" . $nome_file_con_estensione;
    
    file_put_contents($percorso_file, '');

    $image = $_FILES['back-image'];
    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];
    $img4 = $_FILES['img4'];


    $desc = addslashes($_POST['desc']);
    $desc_esp = addslashes($_POST['desc_esp']);
    $desc_it = addslashes($_POST['desc_it']);
    $desc_ch = addslashes($_POST['desc_ch']);
    $desc_ar = addslashes($_POST['desc_ar']);
    

$title = $_POST['title'];
$loc = $_POST['loc'];
$area = $_POST['area'];
$arc = $_POST['arc'];
$ext = $_POST['ext'];
$rend = $_POST['rend'];
$map = $_POST['map'];


  $target_dir = "../php/project/new_project/new_images/";  // La directory di destinazione per l'immagine
    $back_image_name = basename($image['name']);
    $img1_name = basename($img1['name']);
    $img2_name = basename($img2['name']);
    $img3_name = basename($img3['name']);
    $img4_name = basename($img4['name']);




    $target_file = $target_dir . $back_image_name;
    $target_file1 = $target_dir . $img1_name;
    $target_file2 = $target_dir . $img2_name;
    $target_file3 = $target_dir . $img3_name;
    $target_file4 = $target_dir . $img4_name;

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
    $imageFileType4 = strtolower(pathinfo($target_file4, PATHINFO_EXTENSION));

    // Verifica se $uploadOk è ancora uguale a 1 per determinare se si può procedere con l'upload
    if ($uploadOk === 0) {
      echo "Errore durante l'upload del file.";
    } else {
      if (move_uploaded_file($image['tmp_name'], $target_file)) {
        // L'immagine è stata caricata con successo, ora puoi copiare/incollare il codice in un altro file
      }
    }   

    if ($uploadOk === 0) {
      echo "Errore durante l'upload del file.";
    } else {
      if (move_uploaded_file($img1['tmp_name'], $target_file1)) {
        // L'immagine è stata caricata con successo, ora puoi copiare/incollare il codice in un altro file
      }
    }
    if ($uploadOk === 0) {
      echo "Errore durante l'upload del file.";
    } else {
      if (move_uploaded_file($img2['tmp_name'], $target_file2)) {
        // L'immagine è stata caricata con successo, ora puoi copiare/incollare il codice in un altro file
      }
    }
    if ($uploadOk === 0) {
      echo "Errore durante l'upload del file.";
    } else {
      if (move_uploaded_file($img3['tmp_name'], $target_file3)) {
        // L'immagine è stata caricata con successo, ora puoi copiare/incollare il codice in un altro file
      }
    }
    if ($uploadOk === 0) {
      echo "Errore durante l'upload del file.";
    } else {
      if (move_uploaded_file($img4['tmp_name'], $target_file4)) {
        // L'immagine è stata caricata con successo, ora puoi copiare/incollare il codice in un altro file
      }
    }    






$file_path = "../php/project/new_project/$file_name.php";

$code_to_paste = '<!DOCTYPE html PUBLIC>
<html xmlns="https://cosmosarchitecture.com/XHTML">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>'.$file_name.' - Cosmos Architecture</title>
        <link rel="stylesheet" href="../css-project/project.css">
        <link rel="stylesheet" href="../../../css/mobile.css">
        <link rel="stylesheet" href="../../../css/footer.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <link rel="stylesheet" href="../css/lightbox.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/lightbox-plus-jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="../../../images/favicon.ico">
    </head>
    <body>
    <header>
          <?php include "../../../functions/getSocialMediaLinks.php"; ?>
          <?php include "../../../functions/getMenuItems.php"; ?>
  



    <div class="row">
    <div class="column">

    <div class="socinsta">
      <ul>

          
          <li><a href="<?php echo getSocialMediaLink("instagram", "../../../files/social-media-links.txt"); ?>"><img alt
                                                                                                               style="width: 20px; height: 20px; margin-top: 5.7px; margin-left: 0px;"
                                                                                                               src="../../../dashboard/icons/instagram-logo.png"></a>
          </li>
          <li><a href="<?php echo getSocialMediaLink("twitter", "../../../files/social-media-links.txt"); ?>"><img alt
                                                                                                             style="width: 20px; height: 20px; margin-top: 5.7px; margin-left: 0px;"
                                                                                                             src="../../../dashboard/icons/twitter-logo.png"></a>
          </li>
          <li><a href="<?php echo getSocialMediaLink("facebook", "../../../files/social-media-links.txt"); ?>"><img alt
                                                                                                              style="width:20px; height: 20px; margin-top: 6px; margin-left: 0px;"
                                                                                                              src="../../../dashboard/icons/facebook-logo.png"></a>
          </li>
          <li><a href="<?php echo getSocialMediaLink("linkedin", "../../../files/social-media-links.txt"); ?>"><img alt
                                                                                                              style="width: 20px; height: 20px; margin-top: 6px; margin-left: 0px;"
                                                                                                              src="../../../dashboard/icons/linkedin-logo.png"></a>
          </li>
      </ul>
  </div>
  

</div>
<div class="column">

<div class="language">
      <ul>
              
                   <li><a class="active" language="english" ><!-- <img alt
                                                            style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px;"
                                                            src="../../images/img-flags/flag-of-United-Kingdom.png">-->EN</a>
                    </li>
                    <li><a  language="spanish" ><!-- <img alt
                                                              style="width:15px; height: 15px; margin-top: 6px; margin-left: 0px;"
                                                              src="../../images/img-flags/flag-of-Spain.png">--> ES</a>
                    </li>
                    <li><a language="italian" ><!-- <img alt
                                         style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0px; border-radius: 10px"
                                         src="../../images/img-flags/flag-of-Italy.png">--> IT</a>
                    </li>
                    <li><a language="chinese" ><!-- <img alt
                                                            style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0;"
                                                            src="../../images/img-flags/flag-of-China.png">--> CH</a>
                    </li>
                    <li><a language="arabic" ><!-- <img alt
                                                            style="width: 15px; height: 15px; margin-top: 6px; margin-left: 0;"
                                                            src="../../images/img-flags/flag-of-Arabia.png">--> AR</a>
                    </li>
             
        </ul>
    </div>

</div>
</div>


  <a href="../../../home.php"><img style="height: 10vh; width: auto;" src="../../../dashboard/icons/logo.png" class="logo"></a>

  <div class="menu">
    <nav>
        <div class="nav-lns" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="../../project.php" class="project">PROJECTS</a></li>

                <li><a href="../../en/estudio-en.php" class="office">OFFICE</a>
                </li>
                <li><a href="../../contacto.php" class="contact">CONTACTS</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  </div>

</header>

<!--           NEW           -->
<section class="container" style="background-image: url(new_images/'.$back_image_name.');">

  <div class="txt">
    <h1>'.$title.'</h1>
      <p class="break-word, desc" style="font-size: 12px;">'.$desc.'</p>
  </div>




</section>

<section class="gallery">
  <a href="new_images/'.$img1_name.'" data-lightbox="mygallery"><img src="new_images/'.$img1_name.'" alt=""></a>
  <a href="new_images/'.$img2_name.'" data-lightbox="mygallery"><img src="new_images/'.$img2_name.'" alt=""></a>
  <a href="new_images/'.$img3_name.'" data-lightbox="mygallery"><img src="new_images/'.$img3_name.'" alt=""></a>
  <a href="new_images/'.$img4_name.'" data-lightbox="mygallery"><img src="new_images/'.$img4_name.'" alt=""></a>




</section>


<section class="people">
  <div class="text">

    <h3 class="loc">Location:</h3>

    <p>'.$loc.'</p>

    <h3 class="area">Area:</h3>

    <p>'.$area.'m2</p>


    <h3 class="collab">Collaborating Architects:</h3>

    <p>'.$arc.'</p>

    <h3 class="ext">External Collaborators:</h3>

    <p>'.$ext.'</p>

    <h3 class="rend">Rendering/Photo/CGI:</h3>

    <p>'.$rend.'</p>
  </div>

</section>


<section class="location">


<iframe src="'.$map.'" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>


<section class="container_btn">
  <div class="center_btn">
    <a href="../../project.php"><button class="btn_all">All Projects</button></a>
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
              <a href="../../../home.php"><img style="height: 10vh; width: auto;" src="../../../dashboard/icons/logo.png" alt="company logo"></a>
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




        const langEl = document.querySelector(".language");
        const link = document.querySelectorAll(".language a");
        
        const descEl = document.querySelector(".desc");
        const locEl = document.querySelector(".loc");
        const areaEl = document.querySelector(".area");
        const collabEl = document.querySelector(".collab");
        const extEl = document.querySelector(".ext");
        const renderEl = document.querySelector(".rend");
        const btntraEl = document.querySelector(".btn_all");
        const projectEl = document.querySelector(".project");
        const officeEl = document.querySelector(".office");
        const contactEl = document.querySelector(".contact");
        
        
        link.forEach(el => {
              el.addEventListener("click", () => {
                langEl.querySelector(".active").classList.remove("active");
                el.classList.add("active");
        
                const attr = el.getAttribute("language");
        
                if (attr === "arabic") {
                    descEl.style.direction = "rtl";
                    locEl.style.direction = "rtl";
                    areaEl.style.direction = "rtl";
                    collabEl.style.direction = "rtl";
                    extEl.style.direction = "rtl";
                    renderEl.style.direction = "rtl";
                    btntraEl.style.direction = "rtl";
                    projectEl.style.direction = "rtl";
                    officeEl.style.direction = "rtl";
                    contactEl.style.direction = "rtl";
                } else {
                    descEl.style.direction = "ltr";
                    locEl.style.direction = "ltr";
                    areaEl.style.direction = "ltr";
                    collabEl.style.direction = "ltr";
                    extEl.style.direction = "ltr";
                    renderEl.style.direction = "ltr";
                    btntraEl.style.direction = "ltr";
                    projectEl.style.direction = "ltr";
                    officeEl.style.direction = "ltr";
                    contactEl.style.direction = "ltr";
                }
                
        
        
                
                descEl.textContent = data[attr].desc;
                locEl.textContent = data[attr].loc;
                areaEl.textContent = data[attr].area;
                collabEl.textContent = data[attr].collab;
                extEl.textContent = data[attr].ext;
                renderEl.textContent = data[attr].rend;
                btntraEl.textContent = data[attr].btn_all;
                projectEl.textContent = data[attr].project;
                officeEl.textContent = data[attr].office;
                contactEl.textContent = data[attr].contact;
          
              });
            });
            
        
        var data = {
            
            "english":{
        
                "desc": "'.$desc.'",
        
                "loc": "Location:",
        
                "area": "Area:",
        
                "collab": "Collaborating Architects:",
        
                "ext": "External Collaborators:",
        
                "rend": "Rendering/Photo/CGI:",
        
                "btn_all": "All Projects",
        
                
                "project": "PROJECTS",
        
                "office": "OFFICE",
        
                "contact": "CONTACTS",
            },
            "spanish":{
                "desc": "'.$desc_esp.'",
        
                "loc": "Ubicación:",
        
                "area": "Área:",
        
                "collab": "Arquitectos Colaboradores:",
        
                "ext": "Colaboradores Externos:",
        
                "rend": "Renderizado/Foto/CGI:",
        
                "btn_all": "Todos los proyectos",
        
                
                "project": "PROYECTOS",
        
                "office": "OFICINA",
        
                "contact": "CONTACTOS",
            },
        
            "italian":{
                "desc": "'.$desc_it.'",
        
                "loc": "Posizione:",
        
                "area": "Area:",
        
                "collab": "Architetti Collaboratori:",
        
                "ext": "Collaboratori Esterni:",
        
                "rend": "Rendering/Foto/CGI:",
        
                "btn_all": "Tutti i Progetti",
        
                "project": "PROGETTI",
        
                "office": "UFFICIO",
        
                "contact": "CONTATTI",
            },
        
            "chinese": {
                "desc": "'.$desc_ch.'",
        
                "loc": "位置:",
        
                "area": "區域:",
        
                "collab": "合作建築師:",
        
                "ext": "外部合作者:",
        
                "rend": "渲染/照片/CGI:",
        
                "btn_all": "所有項目",
        
                "project": "項目",
        
                "office": "辦公室",
        
                "contact": "聯繫方式",
            },
        
            "arabic":{
              "desc": "'.$desc_ar.'",

              
                "loc": "موقع",
        
                "area": "منطقة",
        
                "collab": "المهندسين المعماريين المتعاونين",
        
                "ext": "المتعاونون الخارجيون",
        
                "rend": "التقديم / الصورة / CGI",
        
                "btn_all": "كل المشاريع",
        
                "project": "المشاريع",
        
                "office": "مكتب",
        
                "contact": "جهات الاتصال",
            }
        }


        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.left="0";
        }
        function hideMenu(){
            navLinks.style.left="-200px";
        }



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
            ScrollReveal().reveal(".headline", { distance: "100px",duration: 1500,interval: 400 } );


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
';


$file = fopen($file_path, "a");

$result = file_put_contents($file_path, $code_to_paste, FILE_APPEND);
}


?>