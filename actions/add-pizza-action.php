<?php
    if(isset($_POST['submit'])) {
        echo htmlspecialchars($_POST['email']);
        echo htmlspecialchars($_POST['title']);
        echo htmlspecialchars($_POST['ingredients']); 
    }
?>