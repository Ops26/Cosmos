<?php
session_start();

// Verifica se l'utente ha effettuato l'accesso
if (!isset($_SESSION['username'])) {
    
    header("Location: index.php");
    exit();
}
?>