<?php


$local = "127.0.0.1";
$user = "root";
$pass = "";
$db_name = "jaribu";
$conn = "";

$conn = mysqli_connect($local, $user, $pass, $db_name);

if($conn){
    // echo "You are coonected!";
}else{
    echo "There is a prob!";
}