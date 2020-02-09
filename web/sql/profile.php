<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>

    <?php
        require "dbConnect.php";
        $db = get_db();
        $comments = $db->prepare("SELECT * FROM comments");

        $comments->execute();

        $form = "<form action ='profile.php' method='post'><select name='people'";
        while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
        {
            $custom_name = $cRow["custom_name"];
            $user_comment = $cRow["user_comment"];
            $user_description = $cRow["user_description"];
            $form = $form . "<option value='$custom_name'>$custom_name</option>";
        }
        $form = $form . "</select><button type='See Description'>Submit</form>";

        echo $form;

        if (isset($_POST["people"]))
        {
            $person = $_POST["people"];
            echo "<h1>$person</h1>";
            $description = $db->prepare("SELECT user_description FROM comments WHERE custom_name = $person");
            echo "<textarea rows='3' cols='80' readonly>$description</textarea>";
        }
    ?>
    
</body>
</html>