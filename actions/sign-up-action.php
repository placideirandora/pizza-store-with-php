<?php
    require 'helpers/connection.php';

    $firstname = $lastname = $email = $password = $passwordConfirm = '';
    $errors = array('firstname' => '', 'lastname' => '', 'email' => '', 'password' => '', 'password-confirm' => '');
    $response = array('result' => '', 'values' => '');

    if(isset($_POST['submit'])) {
        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'First Name is required <br/> <br/>';
        } else {
            $firstname = $_POST['firstname'];
            
            if (!preg_match('/^[a-zA-Z]+$/', $firstname)) {
                $errors['firstname'] = 'First Name must be letters only<br/> <br/>';
            }
        }

        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Last Name is required <br/> <br/>';
        } else {
            $lastname = $_POST['lastname'];

            if (!preg_match('/^[a-zA-Z]+$/', $lastname)) {
                $errors['lastname'] = 'Last Name must be letters only<br/> <br/>';
            }
        }

        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required <br/> <br/>';
        } else {
            $email = $_POST['email'];
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be a valid email address';
            }
        }

        if (empty($_POST['password'])) {
            $errors['password'] = 'Password is required <br/> <br/>';
        } else {
            $password = $_POST['password'];

            if (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/', $password)) {
                $errors['password'] = 'Password must not be less than 8 characters, must contain at least one uppercase letter (ex: A, B, etc.), one lowercase letter (ex: a, b, etc.), one special character (ex: $, #, @, !,%,^,&,*, etc.), and one digit number (ex: 0, 1, 2, 3, etc.) <br/> <br/>';
            }
        }

        if (empty($_POST['password-confirm'])) {
            $errors['password-confirm'] = 'Password Confirmation is required <br/> <br/>';
        } else {
            $passwordConfirm = $_POST['password-confirm'];

            if (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/', $passwordConfirm)) {
                $errors['password-confirm'] = 'Password must not be less than 8 characters, must contain at least one uppercase letter (ex: A, B, etc.), one lowercase letter (ex: a, b, etc.), one special character (ex: $, #, @, !,%,^,&,*, etc.), and one digit number (ex: 0, 1, 2, 3, etc.) <br/> <br/>';
            } else if ($passwordConfirm != $password) {
                $errors['password-confirm'] = "Password Confirmation does not match Password";
            }
        }

        if (!array_filter($errors)) {
            $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $uniqueEmail = "SELECT * FROM users WHERE email = '$email'";

            $result = mysqli_query($conn, $uniqueEmail);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                $errors['email'] = 'This email is already taken. Please, try another one. <br/> <br/>';
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $registerUser = "INSERT INTO users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$hash')";

                if(mysqli_query($conn, $registerUser)) {
                    $response['result'] = 'Access granted. Registered.';
                    $response['values'] = 'green-text center';
                } else {
                    $response['result'] = 'Access denied. Error: ' . mysqli_error($conn);
                    $response['values'] = 'red-text center';
                }
            }
        }
    }
?>