<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>

    <link href="../styles/mobile.css" rel="stylesheet"> <!-- default styles - small/phone views -->
    <link href="../styles/medium.css" rel="stylesheet"> <!-- medium/tablet views -->
    <link href="../styles/large.css" rel="stylesheet"> <!-- large/wide/desktop views -->

    <style>
        main {
            margin-left: 25px;
            margin-right: 25px;
            margin-top: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        input[type=submit] {
            font-size: 16px;
            background-color: black;
            color: white;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: none;
            border-radius: 4px;
        }

        .center {
            width: 400px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        input[type=text], select {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
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
        <h1>Thank You for signing up with Harrison Apartments!</h1>
        <h3>Please create a new User Name and Password</h3>

        <div class="center">
            <from>
                <fieldset>
                    <legend><b>Harrison Login</b></legend>
                    User Name:<br>
                    <input type="text" name="username" required><br>
                    Password:<br>
                    <input type="text" name="password" required><br>
                    Confirm Password:<br>
                    <input type="text" name="confirm" required><br>
                    <input type="submit" value="Create Account">
                </fieldset>
            </from>
        </div>
    </main>

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