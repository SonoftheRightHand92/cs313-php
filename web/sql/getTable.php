<?php
   require "dbConnect.php";
   $db = get_db();
   $comments = $db->prepare("SELECT * FROM comments");

   if (is_null($comments))
   {
       echo "You're a stupid face";
   }

   $comments->execute();
   while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
   {
      $custom_name = $fRow["custom_name"];
      echo "Custom Name: $custom_name<br>";
      $user_comment = $fRow["user_comment"];
      echo "User comment: $user_comment<br>";
      $user_description = $fRow["user_description"];
      echo "User description: $user_description<br>";
      echo "<p>$custom_name: $user_comment<br>About $custom_name: $user_description</p>";
   }
?>