<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <section class="container grey-text">
            <h4 class="center">CONTACT US</h4>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" className="white">
                <label htmlFor="email">Email</label>
                <input type="text" name="email" />       
                <label htmlFor="subject">Subject</label>
                <input type="text" name="subject" />
                <label htmlFor="message">Message</label>
                <textarea name="message"></textarea>
                <div class="center">
                    <input type="submit" name="submit" value="SEND" class="btn brand z-depth-0">
                </div>
            </form>
    </section>
    <?php require 'templates/footer.php' ?>
</html>