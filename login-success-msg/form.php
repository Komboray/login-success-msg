<?php
//we are gooing to handle the eerors in this page and try and echo the error in the index.php page
include("connect.php");




    if(isset($_POST["submit"])){
        
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
    
            $sql = "INSERT INTO `users` (pass, email, username)
                    VALUES ('$password', '$email', '$username')";
    
            $result = mysqli_query($conn, $sql);
    
            if($result){
                echo "Details sent";
    
                header("Location:after.php");
            }elseif(empty($_POST["username"])){
                header("Location:index.php?error=There is no username!");
    
            }elseif(empty($_POST["email"])){
                header("Location:index.php?error=There is no email!");
    
            }elseif(empty($_POST["password"])){
                header("Location:index.php?error=There is no password!");
    
            }else{
                echo "Something went wrong";
            }
    
        
    }
