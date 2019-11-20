<?php 
    require 'helpers/connection.php';

    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $retrievePizza = "SELECT * FROM pizzas WHERE id = '$id'";

        $result = mysqli_query($conn, $retrievePizza);
        $pizza = mysqli_fetch_array($result, MYSQLI_ASSOC);

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>