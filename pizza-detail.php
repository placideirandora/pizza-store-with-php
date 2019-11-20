<?php require 'actions/pizza-detail-action.php' ?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <h4 class="center grey-text">PIZZA DETAIL</h4>
    <div class="container center">
        <?php if($pizza): ?>
            <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p>Created At: <?php echo htmlspecialchars(date($pizza['created_at'])); ?></p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p> 
        <?php else: ?>
        <?php endif ?>
    </div>
    <?php require 'templates/footer.php' ?>
</html>