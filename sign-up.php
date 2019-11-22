<?php require 'actions/sign-up-action.php' ?> 

<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <section class="container grey-text">
            <h4 class="center">SIGN UP</h4>
            <div class="<?php echo htmlspecialchars($response['values']); ?>">
            <?php echo htmlspecialchars($response['result']); ?>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" className="white">
                <label htmlFor="firstname">First Name</label>
                <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname) ?>" /> 
                <div class="red-text"><?php echo $errors['firstname']; ?></div>
                <label htmlFor="lastname">Last Name</label>
                <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname) ?>" /> 
                <div class="red-text"><?php echo $errors['lastname']; ?></div>  
                <label htmlFor="email">Email</label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" /> 
                <div class="red-text"><?php echo $errors['email']; ?></div>      
                <label htmlFor="password">Password</label>
                <input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>" />
                <div class="red-text"><?php echo $errors['password']; ?></div>
                <label htmlFor="password-confirm">Confirm Password</label>
                <input type="password" name="password-confirm" value="<?php echo htmlspecialchars($passwordConfirm) ?>" />
                <div class="red-text"><?php echo $errors['password-confirm']; ?></div>
                <p class="center">Already have an account? <a href="sign-in.php" class="grey-text">SIGNIN</a></p>
                <br>
                <div class="center">
                    <input type="submit" name="submit" value="SIGNUP" class="btn brand z-depth-0">
                </div>
            </form>
    </section>
    <?php require 'templates/footer.php' ?>
</html>