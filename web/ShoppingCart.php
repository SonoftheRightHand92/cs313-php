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
    <?php
        $meat = $_SESSION["m"]; 
        $veggies = $_SESSION["v"];
        $dairy = $_SESSION["d"];
        $text = "<form method='post' action='ShoppingCart.php'>";

        for ($i = 0; $i < sizeof($meat); $i++) {
            if (!is_null($meat[$i])) {
                $meatID = 100 + $i;
                $text = $text . "<input type='text' id='" . $meatID . "' value='". $meat[$i] ."' readonly>" . " <button type='button' onclick='myFunction($meatID)'>Remove</button><br><br>";
            }
        }

        for ($i = 0; $i < sizeof($veggies); $i++) {
            if (!is_null($veggies[$i])) {
                $veggiesID = 200 + $i;
                $text = $text . "<input type='text' id='" . $veggiesID . "' value='". $veggies[$i] ."' readonly>" . " <button type='button' onclick='myFunction($veggiesID)'>Remove</button><br><br>";
            }
        }

        for ($i = 0; $i < sizeof($dairy); $i++) {
            if (!is_null($dairy[$i])) {
                $dairyID = 300 + $i;
                $text = $text . "<input type='text' id='" . $dairyID . "' value='". $dairy[$i] ."' readonly>" . " <button type='button' onclick='myFunction($dairyID)'>Remove</button><br><br>";
            }
        }
        
        $text = $text . "<input type='submit' value='Remove Items'></form>";

        echo $text;
    ?>
</body>
</html>