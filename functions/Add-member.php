<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Controlla se sono stati inviati tutti i dati del form
  if (isset($_FILES['image'], $_POST['name'], $_POST['role'], $_POST['linkedin'], $_POST['email'])) {
    // Ottieni i dati dal form
    $image = $_FILES['image'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];

    // Gestisci l'upload dell'immagine
    $target_dir = "../images/img-members/";  // La directory di destinazione per l'immagine
    $target_file = $target_dir . basename($image['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica se il file è un'immagine reale
    $check = getimagesize($image['tmp_name']);
    if ($check === false) {
      echo "Il file non è un'immagine valida.";
      $uploadOk = 0;
    }

    // Verifica il formato dell'immagine (puoi personalizzare questa condizione secondo le tue esigenze)
    if ($imageFileType !== 'jpg' && $imageFileType !== 'jpeg' && $imageFileType !== 'png') {
      echo "Sono consentiti solo file JPG, JPEG e PNG.";
      $uploadOk = 0;
    }

    // Verifica se $uploadOk è ancora uguale a 1 per determinare se si può procedere con l'upload
    if ($uploadOk === 0) {
      echo "Errore durante l'upload del file.";
    } else {
      if (move_uploaded_file($image['tmp_name'], $target_file)) {
        // L'immagine è stata caricata con successo, ora puoi copiare/incollare il codice in un altro file

      }
    }   

        $file_paths = array(
            "../php/en/estudio-en.php",
            "../php/ar/estudio-ar.php",
            "../php/ch/estudio-ch.php",
            "../php/esp/estudio-esp.php",
            "../php/it/estudio-it.php"
          );
          
          $code_to_paste = '<div class="card">
            <img src="../' . $target_file . '">
            <div class="details">
              <h3>' . $name . '</h3>
              <p>' . $role . '</p>
              <div class="social-links">
                <a href="' . $linkedin . '" class="linkedin"><i class="fa-brands fa-linkedin "></i></a>
                <a href="mailto:' . $email . '" class="email"><i class="fa-solid fa-envelope "></i></a>
              </div>
            </div>
          </div>';
          
          foreach ($file_paths as $file_path) {
            // Leggi il contenuto del file
            $existing_content = file_get_contents($file_path);
          
            // Trova il punto di riferimento nel file in cui inserire il nuovo codice
            $position = strpos($existing_content, "<!--riferimento-->");
            if ($position !== false) {
              // Inserisci il nuovo codice nella posizione desiderata
              $new_content = substr_replace($existing_content, $code_to_paste, $position, 0);
          
              // Sovrascrive il file con il nuovo contenuto
              file_put_contents($file_path, $new_content);
            }
          }
          
}
}
?>
