<?php
    if(isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            echo 'Email is required <br/>';
        } else {
            echo htmlspecialchars($_POST['email']);
        }

        if (empty($_POST['title'])) {
            echo 'Title is required <br/>';
        } else {
            echo htmlspecialchars($_POST['title']);
        }

        if (empty($_POST['ingredients'])) {
            echo 'Ingredients are required <br/>';
        } else {
            echo htmlspecialchars($_POST['ingredients']);
        }
    }
?>