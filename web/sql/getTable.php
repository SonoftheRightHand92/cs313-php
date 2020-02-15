<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>

    <style>
    body {
            background-color: black;
            color: white;
        }

        h1 {
            text-align: center;
        }

        #ref1 {
            display: block;
            text-align: center;
        }
        
        a:link {
            color: red;
        }

        a:visited {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Want to make a profile?</h1>
    <form method="post" action="getTable.php">
        Profile name:<br>
        <input type="text" name="name"><br>
        Comment:<br>
        <input type="textarea" rows="3" cols="80" name="comment"><br>
        About you:<br>
        <input type="textarea" rows="3" cols="80" name="description"><br><br>
        <input type="submit" value="Submit">  
    </form>

    <h1>Comments</h1>
    <?php
        require "dbConnect.php";
        $db = get_db();
        $comments = $db->prepare("SELECT * FROM comments");

        $comments->execute();
        while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
        {
            $custom_name = $cRow["custom_name"];
            $user_comment = $cRow["user_comment"];
            echo "<div>$custom_name:<br><textarea rows='3' cols='80' readonly>$user_comment</textarea></div>";
        }
    ?>
    <h2><a id="ref1" href="profile.php">View Profiles</a></h2>

</body>
</html>