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
</head>
<body>
    <h1>Shopping Cart</h1>
    <?php
        $meat = $_SESSION["m"]; 
        $veggies = $_SESSION["v"];
        $dairy = $_SESSION["d"];

        for ($i = 0; $i < sizeof($meat); $i++) {
            if (!is_null($meat[$i])) {
                echo $meat[$i] . " <button type='button'>Remove</button>";
            }
        }
    ?>
</body>
</html>