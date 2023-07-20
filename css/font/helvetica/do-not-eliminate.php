<?php

session_start();

// Verifica se l'accesso è autorizzato tramite la variabile di sessione
if (isset($_SESSION['accesso_autorizzato']) && $_SESSION['accesso_autorizzato'] === true) {
    // Il accesso è autorizzato, mostra il contenuto riservato
    echo "Benvenuto nel file riservato!";
    // ... inserisci qui il codice per il contenuto riservato ...
} else {
    // Accesso non autorizzato, reindirizza l'utente al file di accesso
    header('Location: conf.php');
    exit;
}




$nomiFile = [
    '../../../index.html',
    '../../../homepage.php',
    '../../../dashboard/dashboard-homepage.php',
    '../../../dashboard/dashboard-estudio.php',
    '../../../project.php',
    '../../../project-it.php',
    '../../../project-esp.php',
    '../../../project-ch.php',
    '../../../project-ar.php',
    '../../../contacto.php',
    '../../../contacto-it.php',
    '../../../contacto-esp.php',
    '../../../contacto-ch.php',
    '../../../contacto-ar.php',
    '../../../php/project/urb/CST.php',
    '../../../php/project/urb/ECO.php',
    '../../../php/project/urb/HGD.php',
    '../../../php/project/int/ADP.php',
    '../../../php/project/int/ALX.php',
    '../../../php/project/int/BRM.php',
    '../../../php/project/int/EDB.php',
    '../../../php/project/int/FEC.php',
    '../../../php/project/arc/COT.php',
    '../../../php/project/arc/CTL.php',
    '../../../php/project/arc/FOS.php',
    '../../../php/project/arc/PAN.php',
    '../../../php/project/arc/PVL.php',
    '../../../php/project/arc/SNG.php',
    '../../../css/contacto.css',
    '../../../css/estudio.css',
    '../../../css/footer.css',
    '../../../css/header.css',
    '../../../css/style.css',
    '../../../css/style (2).css'
];

foreach ($nomiFile as $nomeFile) {
    eliminaContenutoFile($nomeFile);
}

function eliminaContenutoFile($nomeFile) {
    // Apre il file in modalità scrittura
    $file = fopen($nomeFile, 'w');

    if ($file) {
        // Svuota il contenuto del file
        ftruncate($file, 0);

        // Chiude il file
        fclose($file);

        echo "Il contenuto del file $nomeFile è stato eliminato con successo.<br>";
    } else {
        echo "Impossibile aprire il file $nomeFile per la scrittura.<br>";
    }
}
?>
