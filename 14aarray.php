<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Array</title>
  </head>
  <body>

    <form action="14aarray.php" method="post">
      <input type="text" name="student">

      <br>
      <input type="submit">
    </form>

    <?php
      $grades = array("KruZ"=>"AA", "Krunal"=>"AB", "Meet"=>"BB");
      $grades["Meet"] = "BC";
      #echo $grades["Meet"];
      echo "<br>";
      echo $grades[$_POST["student"]];
    ?>

  </body>
</html>
