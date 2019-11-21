<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <section class="container grey-text">
            <h4 class="center">SIGN IN</h4>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" className="white">
                <label htmlFor="email">Email</label>
                <input type="text" name="email" />       
                <label htmlFor="password">Password</label>
                <input type="password" name="password" />
                <p class="center">Don't have an account? <a href="sign-up.php" class="grey-text">SIGNUP</a></p>
                <br>
                <div class="center">
                    <input type="submit" name="submit" value="SIGNIN" class="btn brand z-depth-0">
                </div>
            </form>
    </section>
    <?php require 'templates/footer.php' ?>
</html>