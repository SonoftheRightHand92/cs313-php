<?php
	require("dbConnect.php");
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link href="../../styles/mobile.css" rel="stylesheet"> <!-- default styles - small/phone views -->
    <link href="../../styles/medium.css" rel="stylesheet"> <!-- medium/tablet views -->
    <link href="../../styles/large.css" rel="stylesheet"> <!-- large/wide/desktop views -->
</head>

<body>
    <div class=infoheader>
        <p id="para01"> Harrison Apartments</p>
    </div>

    <header>
        <div class="mobile-header">
            <a href="../index.html"><img id="logo" src="../images/logo.png" alt="Harrison Logo"></a>
            <h1>Harrison Apartments</h1>

            <input type="checkbox" id="menu" />
            <label for="menu">&#9776;</label>
            <ul class="sub-menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../views/apartments.html">Apartments</a></li>
                <li><a href="../views/prices.html">Prices</a></li>
                <li><a href="../views/signup.php">Sign Up</a></li>
                <li><a href="../views/contact.html">Contact Us</a></li>
                <li><a href="../views/sign_in.php">Sign In</a></li>
            </ul>
        </div><br>

        <nav class="topnav">
            <ul id="myLinks">
                <li class="active"><a href="../index.html">Home</a></li>
                <li><a href="../views/apartments.html">Apartments</a></li>
                <li><a href="../views/prices.html">Prices</a></li>
                <li><a href="../views/signup.php">Sign Up</a></li>
                <li><a href="../views/contact.html">Contact Us</a></li>
                <li><a href="../views/sign_in.php">Sign In</a></li>
            </ul>

        </nav>
    </header>

    <main>
        <h1>Welcome</h1>
        <?php
        $email = $_GET["email"];
        if ($email === "admin@admin.com") {
            $renters = $db->prepare("SELECT * FROM renters");
            $renters->execute();
    
            while ($rRow = $renters->fetch(PDO::FETCH_ASSOC))
            {
                $firstName = $rRow["first_name"];
                $lastName = $rRow["last_name"];
                $newEmail = $rRow["email"];
                $street = $rRow["street_address"];
                $city = $rRow["city"];
                $state = $rRow["state_name"];
                $zip = $rRow["zip"];
                $areaCode = $rRow["area_code_home"];
                $next3 = $rRow["first_three_home"];
                $last4 = $rRow["last_four_home"];
                $cellAreaCode = $rRow["area_code_cell"];
                $cellNext3 = $rRow["first_three_cell"];
                $cellLast4 = $rRow["last_four_cell"];
                $month = $rRow["b_month"];
                $day = $rRow["b_day"];
                $year = $rRow["b_year"];
                $housing = $rRow["housing_contract"];

                echo "$firstName $lastName<br>$newEmail<br>$street $city, $state $zip<br>Home Phone: $areaCode-$next3-$last4<br>
                Cell Phone: $cellAreaCode-$cellNext3-$cellLast4<br>Birthday: $month/$day/$year<br>Is signed up for housing in $housing<br><br>";
            }
        }
        else {
            $renters = $db->prepare("SELECT * FROM renters WHERE email = '$email'");
            $renters->execute();
            
            while ($rRow = $renters->fetch(PDO::FETCH_ASSOC))
            {
                $firstName = $rRow["first_name"];
                $lastName = $rRow["last_name"];
                $street = $rRow["street_address"];
                $city = $rRow["city"];
                $state = $rRow["state_name"];
                $zip = $rRow["zip"];
                $areaCode = $rRow["area_code_home"];
                $next3 = $rRow["first_three_home"];
                $last4 = $rRow["last_four_home"];
                $cellAreaCode = $rRow["area_code_cell"];
                $cellNext3 = $rRow["first_three_cell"];
                $cellLast4 = $rRow["last_four_cell"];
                $month = $rRow["b_month"];
                $day = $rRow["b_day"];
                $year = $rRow["b_year"];
                $housing = $rRow["housing_contract"];
            
                echo "$firstName $lastName<br>$email<br>$street $city, $state $zip<br>Home Phone: $areaCode-$next3-$last4<br>
                Cell Phone: $cellAreaCode-$cellNext3-$cellLast4<br>Birthday: $month/$day/$year<br>Is signed up for housing in $housing";
            }
        }
        ?>
    </main>
    <br>
        <footer>
            <aside>
                Harrison Apartments <br>
                111th Street, Graham, VA 83440<br>
                999-999-9999<br>
            </aside>
            <p class="footer-bar">&copy;2019 All Rights Reserved &vert; Harrison &vert; <span id="currentdate">
                <script src="../scripts/currentdate.js"></script></span>
            </p>
        </footer>
</body>

</html>