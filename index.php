<?php require 'helpers/connection.php' ?>
<?php require 'helpers/queries.php' ?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <h4 class="center grey-text">PIZZAS!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza): ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6> 
                                <?php echo htmlspecialchars($pizza['title']) ?> 
                            </h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ingredient): ?> 
                                    <li><?php echo htmlspecialchars($ingredient); ?></li>
                                <?php endforeach ?> 
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="pizza-detail.php?id=<?php echo htmlspecialchars($pizza['id']); ?>" class="brand-text">More Info</a>
                        </div>
                    </div> 
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php require 'templates/footer.php' ?>
</html>