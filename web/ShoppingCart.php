<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="shopping.css">

    <script>
        function myFunction(customID) {
            document.getElementById(customID).value = "";
        }
    </script>
</head>
<body>
    <h1 id="header">Shopping Cart</h1>
    <button type="button" onclick="window.location.href='Browse.php'">Back to Items</button>
    <button type="button" onclick="window.location.href='Checkout.php'">Checkout</button><br><br>
    <?php

        $meat = $_SESSION["m"]; 
        $veggies = $_SESSION["v"];
        $dairy = $_SESSION["d"];

        if ($_SESSION["t"]) {
            for ($i = 0; $i < 5; $i++) {
                if ($_POST[($i + 10)] == "" || is_null($_POST[($i + 10)])) {
                   $meat[$i] = NULL;
                }
            }

            for ($i = 0; $i < 4; $i++) {
                if ($_POST[($i + 20)] == "" || is_null($_POST[($i + 20)])) {
                    $veggies[$i] = NULL;
                }
            }

            for ($i = 0; $i < 5; $i++) {
                if ($_POST[($i + 30)] == "" || is_null($_POST[($i + 30)])) {
                    $dairy[$i] = NULL;
                }
            }

            $_SESSION["m"] = $meat;
            $_SESSION["v"] = $veggies;
            $_SESSION["d"] = $dairy;
        }

        $text = "<form method='post' action='ShoppingCart.php'><fieldset><legend>Items</legend>";

        for ($i = 0; $i < sizeof($meat); $i++) {
            if (!is_null($meat[$i])) {
                $meatID = 100 + $i;
                $meatName = 10 + $i;
                $text = $text . "<input type='text' id='" . $meatID . "' name='" . $meatName . "' value='". $meat[$i] ."' readonly>" . " <button type='button' onclick='myFunction($meatID)'>Remove</button><br><br>";
            }
        }

        for ($i = 0; $i < sizeof($veggies); $i++) {
            if (!is_null($veggies[$i])) {
                $veggiesID = 200 + $i;
                $veggiesName = 20 + $i;
                $text = $text . "<input type='text' id='" . $veggiesID . "' name='" . $veggiesName . "' value='". $veggies[$i] ."' readonly>" . " <button type='button' onclick='myFunction($veggiesID)'>Remove</button><br><br>";
            }
        }

        for ($i = 0; $i < sizeof($dairy); $i++) {
            if (!is_null($dairy[$i])) {
                $dairyID = 300 + $i;
                $dairyName = 30 + $i;
                $text = $text . "<input type='text' id='" . $dairyID . "' name='" . $dairyName . "' value='". $dairy[$i] ."' readonly>" . " <button type='button' onclick='myFunction($dairyID)'>Remove</button><br><br>";
            }
        }
        
        $text = $text . "<input type='submit' value='Remove Items'></fieldset></form>";

        echo $text;

        $_SESSION["t"] = true;
    ?>
</body>
</html>