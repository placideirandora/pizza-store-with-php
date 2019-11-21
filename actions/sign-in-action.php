<?php
    require 'helpers/connection.php';

    $email = $password = '';
    $errors = array('email' => '', 'password' => '');
    $response = array('result' => '', 'values' => '');

    if(isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required <br/><br/>';
        } 

        $email = $_POST['email'];

        if (empty($_POST['password'])) {
            $errors['password'] = 'Password is required <br/><br/>';
        } 

        if (!array_filter($errors)) {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $retrieveEmail = "SELECT email FROM users WHERE email = '$email'";

            $result = mysqli_query($conn, $retrieveEmail);
            $count = mysqli_num_rows($result);

            if(($count == 1)) {
                // header('Location: index.php');
                $retrieveHash = "SELECT password FROM users WHERE email = '$email'";

                $result = mysqli_query($conn, $retrieveHash);
                $resultArr = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);

                if ($count == 1) {
                    if (password_verify($password, $resultArr['password'])) {
                        $response['result'] = 'Access granted. Signed In.';
                        $response['values'] = 'green-text center';
                    } else {
                        $response['result'] = 'Access denied. Incorrect email or password.';
                        $response['values'] = 'red-text center';
                    }
                }

            } else {
                $response['result'] = 'Access denied. Incorrect email or password.';
                $response['values'] = 'red-text center';
            }
        }
    }
?>