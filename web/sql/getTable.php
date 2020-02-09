<?php
   require "dbConnect.php";
   $db = get_db();
   $comments = $db->prepare("SELECT * FROM comments");
   $comments->execute();
   while ($cRow = $comments->fetch(PDO::FETCH_ASSOC))
   {
      $custom_name = $fRow["custom_name"];
      $user_comment = $fRow["user_comment"];
      $user_description = $fRow["user_description"];
      echo "<p>$custom_name: $user_comment<br>About $custom_name: $user_description</p>";
   }
?>