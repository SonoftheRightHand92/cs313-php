<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
</head>
<body>
<?php
   require "dbConnect.php";
   $db = get_db();
   $comments = $db->prepare("SELECT * FROM comments");

   $comments->execute();
   while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
   {
      $custom_name = $cRow["custom_name"];
      $user_comment = $cRow["user_comment"];
    //   $user_description = $cRow["user_description"];
      echo "<div><a href='profile.php'>$custom_name</a>:<br><textarea rows='3' cols='80' readonly>$user_comment</textarea></div>";
   }

   $_SESSION["custom_name"] = $custom_name;
?>
</body>
</html>