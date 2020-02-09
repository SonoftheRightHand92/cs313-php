<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <style>
        h1 {
            text-align: center;
        }

        #ref1 {
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Profiles</h1>
    <?php
        require "dbConnect.php";
        $db = get_db();
        $comments = $db->prepare("SELECT * FROM comments");

        $comments->execute();

        $form = "<div><form action ='profile.php' method='post'><select name='people'";
        while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
        {
            echo $custom_name;
            $custom_name = $cRow["custom_name"];
            $form = $form . "<option value='$custom_name'>$custom_name</option>";
        }
        $form = $form . "</select><button type='See Description'>Submit</button></form></div><br>";

        echo $form;

        if (isset($_POST["people"]))
        {
            $person = $_POST["people"];
            echo "About $person:<br>"
            $description = $db->prepare("SELECT user_description FROM comments WHERE custom_name = '$person'");
            $description->execute();

            while ($dRow = $description->fetch(PDO::FETCH_ASSOC))
            {
                $desc = $dRow["user_description"];
            }
            echo "<textarea rows='3' cols='80' readonly>$desc</textarea>";
        }
    ?>


    <h2><a id="ref1" href="getTable.php">Back to Comments</a></h2>

</body>
</html>