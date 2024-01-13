<!-- THIS IS THE PAGE GOTTEN FROM THE ORIGINAl HTML PAGE index.html-->
<?php
include("connect.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <script defer src="script.js"></script> -->
</head>
<body>
    <div class="container">
        <form id="form" method = "POST" action="form.php">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <!-- <div class="error"></div> -->
                <div ><?php if(isset($_GET["error"])){
                    echo $_GET["error"];
                } ?></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <!-- <div class="error"></div> -->
                <div ><?php if(isset($_GET["error"])){
                    echo $_GET["error"];
                } ?></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <!-- <div class="error"></div> -->
                <div ><?php if(isset($_GET["error"])){
                    echo $_GET["error"];
                } ?></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2"name="password2" type="password">
                <div class="error"></div>
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>