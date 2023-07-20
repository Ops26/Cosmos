<!DOCTYPE html>
<head>

<title>Login Dashboard</title>

<link rel="stylesheet" href="../css/index-dashboard.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>

</head>
<body>

<section class="login">

    <h2>Cosmos Dashboard</h2>
    <br>

    <form method="POST" action="../functions/login.php" class="centered-form">

        <h1>Enter your credentials to log in</h1>

        <br><br>

        <label>Username:</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>

        <br><br>

        <input style="width: 100px; border: none; background-color: white; color: black; height: 40px; cursor: pointer; font-size: 16px; border-radius: 10px" type="submit" value="Enter">

    </form>


</section>


<body>
</html>
