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
        $form = "<div><form action ='profile.php' method='post'><select name='people'>";
        $db1 = get_db();
        $comments1 = $db1->prepare("SELECT * FROM comments");

        $comments1->execute();
        while ($cRow1 = $comments1->fetch(PDO::FETCH_ASSOC))
        {
            $custom_name1 = $cRow1["custom_name"];
            $form = $form . "<option value='$custom_name1'>$custom_name1</option>";
        }
        $form = $form . "</select><button type='See Description'>Submit</button></form></div><br>";

        echo $form;

        if (isset($_POST["people"]))
        {
            $person = $_POST["people"];
            echo "About $person:<br>";
            $description = $db1->prepare("SELECT user_description FROM comments WHERE custom_name = '$person'");
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