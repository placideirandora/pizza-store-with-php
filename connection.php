<?php
    require 'credentials.php';

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
       echo 'database connection error: ' . mysqli_connect_error(); 
    }
?>