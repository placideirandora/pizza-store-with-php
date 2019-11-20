<?php 
    require 'helpers/connection.php';

    if(isset($_POST['delete'])) {
        $pizzaId = mysqli_real_escape_string($conn, $_POST['pizza-id']);

        $deletePizza = "DELETE FROM pizzas WHERE id = '$pizzaId'";

        if(mysqli_query($conn, $deletePizza)) {
            header('Location: index.php');
        } else {
            echo 'the pizza could not be deleted. error: ' . mysqli_connect_error(); 
        }
    }
?> 