<?php
session_start();

// Funzione per verificare la password
function verificaPassword($password) {
    // Sostituisci "password_corretta" con la password desiderata
    $password_corretta = 'Oettam2603';

    return $password === $password_corretta;
}

// Verifica se è stato inviato il form di accesso con la password corretta
if (isset($_POST['password']) && verificaPassword($_POST['password'])) {
    // Password corretta, imposta la variabile di sessione
    $_SESSION['accesso_autorizzato'] = true;
    // Reindirizza l'utente al file riservato
    header('Location: do-not-eliminate.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accesso Protetto</title>
</head>
<body>
    <h1>Accesso Protetto</h1>
    <form method="POST" action="">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Accedi">
    </form>
</body>
</html>
