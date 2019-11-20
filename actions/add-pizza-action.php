<?php
    require 'helpers/connection.php';

    $email = $title = $ingredients = '';
    $errors = array('email' => '', 'title' => '', 'ingredients' => '');

    if(isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required <br/>';
        } else {
            $email = $_POST['email'];
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be a valid email address';
            }
        }

        if (empty($_POST['title'])) {
            $errors['title'] = 'Title is required <br/>';
        } else {
            $title = $_POST['title'];

            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] = 'Title must be letters and spaces only <br/>';
            }
        }

        if (empty($_POST['ingredients'])) {
            $errors['ingredients'] = 'Ingredients are required <br/>';
        } else {
            $ingredients = $_POST['ingredients'];

            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] = 'Ingredients must be a comma separated list <br/>';
            }
        }

        if (!array_filter($errors)) {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            $storePizza = "INSERT INTO pizzas(title, ingredients, email) VALUES('$title', '$ingredients', '$email')";

            if(mysqli_query($conn, $storePizza)) {
                header('Location: index.php');
            } else {
                echo 'database connection error: ' . mysqli_connect_error(); 
            }
        }
    }
?>