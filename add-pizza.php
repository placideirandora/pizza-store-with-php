<?php require('actions/add-pizza-action.php') ?> 

<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <section class="container grey-text">
        <h4 class="center">Add Pizza</h4>
        <form action="add-pizza.php" method="POST" class="white">
            <label for="email">Email:</label>
            <input type="text" name="email">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label for="title">Title:</label>
            <input type="text" name="title">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label for="ingredients">Ingredients:</label>
            <input type="text" name="ingredients">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php require 'templates/footer.php'  ?>
</html>