<?php

require_once("../db/db.php");

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$cpassword = $_POST["cpassword"];

$sel_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$username'");
$sel_user = mysqli_fetch_assoc($sel_user);

if(!empty($sel_user)) {
    echo "Такой пользователь уже существует!";
} else {
    $push_user = mysqli_query($conn, "INSERT INTO `users`(`username`, `password`, `cpassword`) VALUES ('$username','$password','$cpassword')");
    header("Location: ../login.php");
}

?>