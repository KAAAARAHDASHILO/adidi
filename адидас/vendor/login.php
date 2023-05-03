<?php

require_once("../db/db.php");

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$cpassword = $_POST["cpassword"];

$sel_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$username'");
$sel_user = mysqli_fetch_assoc($sel_user);

if($username != $sel_user['username']) {
    echo "Пользователя с таким логином нет!";
} elseif ($password != $sel_user['password']) {
    echo "Пароль указан не верно!";
} elseif ($cpassword != $sel_user['cpassword']) {
    echo "Пароль подтвержден не правильно!";
} else {
    setcookie("id", $sel_user['id'], time()+23760, "/");
    header("Location: ../index.php");
}

?>