<?php
	require("dbConnect.php");
    $db = get_db();
    
    if (isset($_POST["userName"]) && isset($password = $_POST["password"])) {
        $userName = $_POST["userName"];
        $password = $_POST["password"];

        $profiles = $db->prepare("SELECT * FROM profiles WHERE custom_name = '$userName'");
        $profiles->execute();


        while ($pRow = $profiles->fetch(PDO::FETCH_ASSOC))
        {
            $custom_name = $pRow["custom_name"];
            $code = $pRow["code"];
            $email = $pRow["email"];

            if ($custom_name == $userName && $code == $password) {
                header("Location: login.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <link href="../styles/mobile.css" rel="stylesheet"> <!-- default styles - small/phone views -->
    <link href="../styles/medium.css" rel="stylesheet"> <!-- medium/tablet views -->
    <link href="../styles/large.css" rel="stylesheet"> <!-- large/wide/desktop views -->
    <link href="../styles/signin.css" rel="stylesheet">
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
                <li><a href="../views/sign_in.html">Sign In</a></li>
            </ul>
        </div><br>

        <nav class="topnav">
            <ul id="myLinks">
                <li class="active"><a href="../index.html">Home</a></li>
                <li><a href="../views/apartments.html">Apartments</a></li>
                <li><a href="../views/prices.html">Prices</a></li>
                <li><a href="../views/signup.php">Sign Up</a></li>
                <li><a href="../views/contact.html">Contact Us</a></li>
                <li><a href="../views/sign_in.html">Sign In</a></li>
            </ul>

        </nav>
    </header>

    <main>
        <br>
        <div class="center">
            <form method="post" action="sign_in.php">
                <fieldset>
                    <legend><b>Harrison Login</b></legend>
                    User Name:<br>
                    <input type="text" name="username" required><br>
                    Password:<br>
                    <input type="text" name="password" required><br><br>
                    <input type="submit" value="Login">
                </fieldset>
            </form>
        </div>
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