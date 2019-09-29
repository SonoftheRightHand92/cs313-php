<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assignment02CSS.css">
    <script>
        var x = 0;

        function changeImage() {
            if (x == 0) {
                document.getElementById("pic").src = "HomepageImages/1.jpg";
                x = 1;
                return;
            }

            if (x == 1) {
                document.getElementById("pic").src = "HomepageImages/2.jpg";
                x = 2;
            }

            if (x == 2) {
                document.getElementById("pic").src = "HomepageImages/3.jpg";
                x = 3;
                return;
            }

            if (x == 3) {
                document.getElementById("pic").src = "HomepageImages/4.jpg";
                x = 4;
                return;
            }

            if (x == 4) {
                document.getElementById("pic").src = "HomepageImages/0.jpg";
                x = 0;
                return;
            }
        }
    </script>
</head>
<body class="container">
    <div>
        <h1 id="stuff">Assignment Page</h1><br>
        <a href="assignmentIndex.html">Assignments</a>
        <br><br>
    </div>

    <div>
        <h1>About Me</h1>
        <p>
            I am a software engineer major currently in my Junior year. I grew up in Western Washington
            and because of this love hiking and observing nature. Some of my hobbies include reading
            books such as the Storm Light Archive series and playing electric guitar. My favorite band
            is Disturbed and I mostly listen to heavy metal.<br><br>
            
            Below are some pictures that represent other hobbies and interests I have.
        </p>
    </div>

    <div>
        <h1>Click the Picture</h1>
        <img id="pic" src="HomepageImages/0.jpg" onclick="changeImage()"><br>
        <video width="320" height="240" controls>
            <source id="v1" src="HomepageImages/2.mp4" type="video/mp4">
            <source id="v2" src="HomepageImages/2.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <?php
        $info = getdate();
        $date = $info['mday'];
        $month = $info['mon'];
        $year = $info['year'];
        $hour = $info['hours'];
        $min = $info['minutes'];
        $sec = $info['seconds'];

        $currentDate = "" . $month . "/" . $date . "/" . $year . " " . $hour. ":" . $min . "." . $sec;

        echo "<div>""<h1>"Current Time"</h1>""</div>"$currentDate;
        
    ?>
</body>
</html>