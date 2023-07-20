<?php

$username = $_POST['username'];
$password = $_POST['password'];

$server = 'localhost';
$utente = 'root';
$pass = '';
$db = 'cosmos';

$conn = new mysqli($server, $utente, $pass, $db);


$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

$result = $conn->query($query);


if ($result->num_rows > 0) {
    
    session_start();
    $_SESSION['username'] = $username;
    
    
    header("Location: ../dashboard/dashboard-homepage.php");
    exit(); 
} else {

    echo "Invalid login credentials.";
}

// Chiudi la connessione al database
$conn->close();





?>