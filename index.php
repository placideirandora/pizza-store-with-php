<?php require 'connection.php' ?>
<?php require 'queries.php' ?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'templates/header.php' ?>
    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza) { ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6> 
                                <?php echo htmlspecialchars($pizza['title']) ?> 
                            </h6>
                            <div>
                                <?php echo htmlspecialchars($pizza['ingredients']) ?> 
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="brand-text">More Info</a>
                        </div>
                    </div> 
                </div>
            <?php } ?>
        </div>
    </div>
    <?php require 'templates/footer.php' ?>
</html>