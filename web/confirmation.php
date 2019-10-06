<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <h1>Thank You!<h1>
    Sending:<br>
    <?php
        $meat = $_SESSION["m"]; 
        $veggies = $_SESSION["v"];
        $dairy = $_SESSION["d"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];

        $text = "<textarea rows='14' cols='50' readonly>";

        for ($i = 0; $i < 5; $i++) {
            if (!is_null($meat[$i])) {
                $text = $text . $meat[$i] . "\n";
            }
        }

        for ($i = 0; $i < 4; $i++) {
            if (!is_null($veggies[$i])) {
                $text = $text . $veggies[$i] . "\n";
            }
        }

        for ($i = 0; $i < 5; $i++) {
            if (!is_null($dairy[$i])) {
                $text = $text . $dairy[$i] . "\n";
            }
        }

        $text = $text . "</textarea><br>To:<br>" . $street . "<br>" . $city . ", " . $state . "<br>" . $zip;

        echo $text;
    ?>
    
</body>
</html>