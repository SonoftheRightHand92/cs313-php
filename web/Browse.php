<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 03</title>
    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <form action="Browse.php" method="post">
        <fieldset>
            <legend>Items</legend>
            <h3>Meats</h3>
            <input type="checkbox" name="meat[]" value="Beef">Beef<br>
            <input type="checkbox" name="meat[]" value="Ground Beef">Ground Beef<br>
            <input type="checkbox" name="meat[]" value="Sausage">Sausage<br>
            <input type="checkbox" name="meat[]" value="Ground Sausage">Ground Sausage<br>
            <input type="checkbox" name="meat[]" value="Bacon">Bacon<br><br>

            <h3>Vegetables</h3>
            <input type="checkbox" name="veggies[]" value="Carrots">Carrots<br>
            <input type="checkbox" name="veggies[]" value="Potatoes">Potatoes<br>
            <input type="checkbox" name="veggies[]" value="Onions">Onions<br>
            <input type="checkbox" name="veggies[]" value="Mushrooms">Mushrooms<br><br>

            <h3>Dairy</h3>
            <input type="checkbox" name="dairy[]" value="Milk">Milk<br>
            <input type="checkbox" name="dairy[]" value="Yogurt">Yogurt<br>
            <input type="checkbox" name="dairy[]" value="Ice Cream">Ice Cream<br>
            <input type="checkbox" name="dairy[]" value="Butter">Butter<br>
            <input type="checkbox" name="dairy[]" value="Cheddar Cheese">Cheddar Cheese<br><br>

            <input type="submit" value="Add Items to Cart">
        </fieldset>
    </form><br>
    <button type="button" onclick="window.location.href='ShoppingCart.php'">View Cart</button><br>

    <?php
        $var = NULL;
        $var2 = NULL;
        $var3 = NULL;

        if (!isset($_SESSION["m"]) || !isset($_SESSION["v"]) || !isset($_SESSION["d"])) {
            if (isset($_POST['meat'])) {
                $var = $_POST['meat'];
            }

            if (isset($_POST['veggies'])) {
                $var2 = $_POST['veggies'];
            }

            if (isset($_POST['dairy'])) {
                $var3 = $_POST['dairy'];
            }
        }

        else {
            echo "YO DUDE IS THIS OK"
            if (isset($_SESSION['m'])) {
                $var = $_SESSION['m'];
            }

            if (isset($_SESSION['v'])) {
                $var2 = $_SESSION['v'];
            }

            if (isset($_SESSION['d'])) {
                $var3 = $_SESSION['d'];
            }
        }

        $text = "";

        for ($i = 0; $i < sizeof($var); $i++) {
                $text = $text . $var[$i] . "\n";
        }

        for ($i = 0; $i < sizeof($var2); $i++) {
            $text = $text . $var2[$i] . "\n";
        }

        for ($i = 0; $i < sizeof($var3); $i++) {
            $text = $text . $var3[$i] . "\n";
        }

        if (!is_null($var) || !is_null($var2) || !is_null($var3)) {
            echo "<br>Items in Cart:<br><textarea rows='14' cols='50' readonly>" . $text . "</textarea><br>";
        }

        $_SESSION["m"] = $_POST['meat'];
        $_SESSION["v"] = $_POST['veggies'];
        $_SESSION["d"] = $_POST['dairy'];
        $_SESSION["t"] = false; 


    ?>

</body>
</html>