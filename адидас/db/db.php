<?php
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
   
    $database = "testdatabase";
   
     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password, $database);
   
    // Код, приведенный ниже, - это
    // проверка, что наша база данных
    // подключена правильно. Если наша
    // БД подключена правильно мы
    // можем удалить эту часть из кода
    // или можем просто оставить этот
    // комментарий на будущее.
   
    // if($conn) {
    //     echo "success"; 
    // } 
    // else {
    //     die("Error". mysqli_connect_error()); 
    // } 
?>