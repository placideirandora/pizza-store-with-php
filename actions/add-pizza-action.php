<?php
    if(isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            echo 'Email is required <br/>';
        } else {
            $email = $_POST['email'];
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Email must be a valid email address';
            }

            echo htmlspecialchars($_POST['email']);
        }

        if (empty($_POST['title'])) {
            echo 'Title is required <br/>';
        } else {
            $title = $_POST['title'];

            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                echo 'Title must be letters and spaces only <br/>';
            }

            echo htmlspecialchars($_POST['title']);
        }

        if (empty($_POST['ingredients'])) {
            echo 'Ingredients are required <br/>';
        } else {
            $ingredients = $_POST['ingredients'];

            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                echo 'Ingredients must be a comma separated list <br/>';
            }

            echo htmlspecialchars($_POST['ingredients']);
        }
    }
?>