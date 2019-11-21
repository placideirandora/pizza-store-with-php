<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <section class="container grey-text">
            <h4 class="center">SIGN UP</h4>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" className="white">
                <label htmlFor="firstname">First Name</label>
                <input type="text" name="firstname" /> 
                <label htmlFor="lastname">Last Name</label>
                <input type="text" name="lastname" />   
                <label htmlFor="email">Email</label>
                <input type="text" name="email" />       
                <label htmlFor="password">Password</label>
                <input type="password" name="password" />
                <label htmlFor="password-confirm">Confirm Password</label>
                <input type="password" name="password-confirm" />
                <p class="center">Already have an account? <a href="sign-in.php" class="grey-text">SIGNIN</a></p>
                <br>
                <div class="center">
                    <input type="submit" name="submit" value="SIGNUP" class="btn brand z-depth-0">
                </div>
            </form>
    </section>
    <?php require 'templates/footer.php' ?>
</html>