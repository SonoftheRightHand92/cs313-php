<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <h1>Checkout</h1>

    <button type="button" onclick="window.location.href='ShoppingCart.php'">Back to Items</button><br><br>

    <form action="confirmation.php" method="post">
        <fieldset>
            <legend>Address</legend>

            Street Address:<br>
            <input type="text" name="street"><br><br>

            City:<br>
            <input type="text" name="city"><br><br>

            State:<br>
            <input type="text" name="state"><br><br>

            Zip Code:<br>
            <input type="text" name="zip"><br><br>
            <input type="submit" value="purchase">
        </fieldset>
    </form>

    <?php
        $meat = $_SESSION["m"]; 
        $veggies = $_SESSION["v"];
        $dairy = $_SESSION["d"];






    ?>
</body>
</html>