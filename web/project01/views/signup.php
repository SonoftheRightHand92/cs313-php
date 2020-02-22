<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link href="../styles/mobile.css" rel="stylesheet"> <!-- default styles - small/phone views -->
    <link href="../styles/medium.css" rel="stylesheet"> <!-- medium/tablet views -->
    <link href="../styles/large.css" rel="stylesheet"> <!-- large/wide/desktop views -->
    <link href="../styles/signup.css" rel="stylesheet">

    <script>
        function validate() {
            var x = document.getElementByName("housing[]");
            for (i = 0; i < 3; i++) {
                alert(i);
                if (x[i].checked) {
                    alert("Something was Checked");
                    return;
                }
            }
            alert("Nothing was Checked");
            return false;
        }
    </script>
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
        <br>
        <form action="../views/signup.php" onsubmit="return validate()" method="post">
            <fieldset>
                <legend>Personal Information:</legend>
                First Name:<br>
                <input type="text" name="firstname" required><br>
                Last Name:<br>
                <input type="text" name="lastname" required><br>
                Email Address:<br>
                <input type="text" name="email" requried><br><br>
                Street Address:<br>
                <input type="text" name="homeaddress" required><br>
                City:<br>
                <input type="text" name="city" required><br>
                State:<br>
                <input type="text" name="state" required maxlength="2" size="2"><br>
                Zip Code:<br>
                <input type="text" name="zip" required maxlength="5" size="5"><br><br>
                Home Phone:<br>
                <input type="text" name="areacode" required maxlength="3" size="3"> -
                <input type="text" name="next3" required maxlength="3" size="3"> -
                <input type="text" name="last4" required maxlength="4" size="4"><br>
                Cell Phone:<br>
                <input type="text" name="cellareacode" required maxlength="3" size="3"> -
                <input type="text" name="cellnext3" required maxlength="3" size="3"> -
                <input type="text" name="celllast4" required maxlength="4" size="4"><br><br>
                Birthday:<br>
                <input type="text" name="month" required maxlength="2" size="2"> /
                <input type="text" name="day" required maxlength="2" size="2"> /
                <input type="text" name="year" required maxlength="4" size="4"><br><br>

                Housing Contract:<br>
                <input type="checkbox" name="housing[]" value="Fall">Fall 2020<br>
                <input type="checkbox" name="housing[]" value="Winter">Winter 2021<br>
                <input type="checkbox" name="housing[]" value="Spring">Spring 2021<br><br>

                <input type="submit" value="Submit">
            </fieldset>
        </form>
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