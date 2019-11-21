<?php require 'actions/sign-in-action.php' ?> 

<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <section class="container grey-text">
            <h4 class="center">SIGN IN</h4>
            <div class="<?php echo htmlspecialchars($response['values']); ?>">
            <?php echo htmlspecialchars($response['result']); ?>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" className="white">
                <label htmlFor="email">Email</label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" /> 
                <div class="red-text"><?php echo $errors['email']; ?></div>      
                <label htmlFor="password">Password</label>
                <input type="password" name="password" />
                <div class="red-text"><?php echo $errors['password']; ?></div>
                <p class="center">Don't have an account? <a href="sign-up.php" class="grey-text">SIGNUP</a></p>
                <br>
                <div class="center">
                    <input type="submit" name="submit" value="SIGNIN" class="btn brand z-depth-0">
                </div>
            </form>
    </section>
    <?php require 'templates/footer.php' ?>
</html>