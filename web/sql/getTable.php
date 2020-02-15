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
        <fieldset>
            <legend>New Profile:</legend>

            Profile name:<br>
            <input type="text" name="name"><br><br>

            Comment:<br>
            <input type="text" name="comment"><br><br>

            About you:<br>
            <input type="text" name="description"><br><br>

            <input type="submit" value="Submit">  
        </fieldset>
    </form>

    <h1>Comments</h1>
    <?php
        require "dbConnect.php";
        $db = get_db();

        if (isset($_POST['name']) && isset($_POST['comment']) && isset($_POST['description']))
        {
            
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $food = $_POST['description'];

            try
            {
	            $query = "INSERT INTO comments (custom_name, user_comment, user_description) VALUES (:name, :comment, :description)";
	            $statement = $db->prepare($query);
	            $statement->bindValue(':name', $name);
	            $statement->bindValue(':comment', $comment);
	            $statement->bindValue(':description', $description);
	            $statement->execute();
	
	            $userId = $db->lastInsertId("comments_id_seq");
            }
            catch (Exception $ex)
            {
	            echo "Error with DB. Details: $ex";
	            die();
            }
        }




        $comments = $db->prepare("SELECT * FROM comments ORDER BY custom_name");

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