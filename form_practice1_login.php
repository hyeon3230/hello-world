<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $id = $_GET["id"];
      if ($id != " "){
        echo "You are logged in.";
      } else {
        echo "Login failed.";
      }

      $password = $_GET["password"];
      if ($password == [a-zA-Z].+[0-9]){
        echo "You are logged in.";
      } else {
        echo "Login failed.";
      }
    ?>
  </body>
</html>
