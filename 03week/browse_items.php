<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Browse</title>
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
                <a href="browse_items.php" class="btn btn-success">Browse</a>
                <a href="view_cart.php" class="btn btn-primary">Cart</a>
                <a href="checkout.php" class="btn btn-primary">Checkout</a>
                <a href="confirmation.php" class="btn btn-primary">Confirmation</a>
            </div>
        


        <div class="heading">
            <h1>Welcome to McGuff's Animal Store!</h1>
            <p>Click to add an animal to the shopping cart.</p>
        </div>

        <form action="view_cart.php" method="post">
            Name: <input type="text" name="name" value="bob"><br> 
            E-mail: <input type="text" name="email" value="anywhere@gmail.com"><br>
            <input type="submit">
        </form>


        <!-- Portfolio Gallery Grid -->
        <div class="row">
            
            <div class="column nature show">
                <div class="content">
                    <a href="#" onclick="addAnimal();">
                        <img src="img/dog.jpg" alt="dog" style="width:100%">
                        <h4>Dog</h4>
                        <div class="item_price" name="dog" value="10">$10</div>
                    </a>
                </div>
       
            </div>
            <div class="column nature show">
                <div class="content">
                    <a href="view_cart.html">
                        <img src="img/cat.jpg" alt="Cat" style="width:100%">
                        <h4>Cat</h4>
                        <div class="item_price">$10</div>
                    </a>
                </div>
            </div>
            <div class="column nature show">
                <div class="content">
                    <a href="view_cart.html">
                        <img src="img/squirrel.jpg" alt="Squirrel" style="width:100%">
                        <h4>Squirrel</h4>
                        <div class="item_price">$15</div>
                    </a>
                </div>
            </div>

            <div class="column cars show">
                <div class="content">
                    <a href="view_cart.html">
                        <img src="img/whale.jpg" alt="Whale" style="width:100%">
                        <h4>Whale</h4>
                        <div class="item_price">$100</div>
                    </a>
                </div>
            </div>
        </div>





        <!-- <div class="gallery">
            <a target="_blank" href="img/dog.jpg">  
              <img src="img/dog.jpg" alt="Dog" width="300" height="200">
            </a>
            <div class="item_title">Dog</div>
            <div class="item_price">$10</div>
        </div>


        <div class="gallery">
            <a target="_blank" href="img/cat.jpg">
              <img src="img/cat.jpg" alt="Cat" width="300" height="200">
            </a>
            <div class="item_title">Cat</div>
            <div class="item_price">$10</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="img/squirrel.jpg">
              <img src="img/squirrel.jpg" alt="Squirrel" width="600" height="400">
            </a>
            <div class="item_title">Squirrel</div>
            <div class="item_price">$15</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="img/whale.jpg">
              <img src="img/whale.jpg" alt="Whale" width="600" height="400">
            </a>
            <div class="item_title">Whale</div>
            <div class="item_price">$100</div>
        </div> -->

    </div>



</body>

</html>












<!-- Browse Items

On the browse items page, the user sees a list of items they can add to their cart and purchase. Again, the kind of items and the formatting of this page is up to you.

You should provide a button or link to add an item to the cart. Doing so should store that item in some way to the session, and then keep the user on the browse page.

View Cart

Your browse page should contain a link to view the cart. On the view cart page, the user can see all the items that are in their cart. Provide a way to remove individual items from the cart.

The view cart page should have a link to return to the browse page for more shopping and a link to continue to the checkout page.

Checkout

The checkout page should ask the user for the different components of their address. (No credit card or other purchase information is collected, only an address.)

It should have the option to complete the purchase or return to the cart.

Confirmation page

After completing the purchase from the checkout page, the user is shown a confirmation page. It should display all the items they have just purchased as well as the address to which it will be shipped.

Make sure to check for malicious injection, especially from free-entry fields like the address. -->