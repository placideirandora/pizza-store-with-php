<?php
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
            header('Location: index.php');
        }
    }
?>