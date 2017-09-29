



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <script src="javascript.js"></script>
            <div class="container">
                    <div class="btn-group btn-group-justified">
                        <a href="browse_items.php" class="btn btn-primary">Browse</a>
                        <a href="view_cart.php" class="btn btn-success">Cart</a>
                        <a href="checkout.php" class="btn btn-primary">Checkout</a>
                        <a href="confirmation.php" class="btn btn-primary">Confirmation</a>
                    </div>
                </div>
            

            Welcome <?php echo $_POST["name"]; ?><br>
            Your email address is: <?php echo $_POST["email"]; ?>
            Dog Price: <?php echo $_POST["dog"];?>
            
                <div class="heading">
                    <h1>Welcome to McGuff's Animal store!</h1>
                    <p>Click to add an animal to the shopping cart.</p>
                </div>

                <?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
?>
    
    </body>
</html>