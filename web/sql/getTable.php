<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
      echo "Custom Name: $custom_name<br>";
      $user_comment = $cRow["user_comment"];
      echo "User comment: $user_comment<br>";
      $user_description = $cRow["user_description"];
      echo "User description: $user_description<br>";
      echo "<p>$custom_name: $user_comment<br>About $custom_name: $user_description</p>";
   }
?>
</body>
</html>


<!-- //
//    require "dbConnect.php";
//    $db = get_db();
//    $comments = $db->prepare("SELECT * FROM comments");

//    $comments->execute();
//    while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
//    {
//       $custom_name = $cRow["custom_name"];
//       echo "Custom Name: $custom_name<br>";
//       $user_comment = $cRow["user_comment"];
//       echo "User comment: $user_comment<br>";
//       $user_description = $cRow["user_description"];
//       echo "User description: $user_description<br>";
//       echo "<p>$custom_name: $user_comment<br>About $custom_name: $user_description</p>";
//    } -->



<!-- <textarea rows='14' cols='50' readonly> -->