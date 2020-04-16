<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkbox</title>
  </head>
  <body>

    <form action="13checkbox.php" method="post">

      Apples: <input type="checkbox" name="fruits[]" value="apples">
      <br>
      Oranges: <input type="checkbox" name="fruits[]" value="oranges">
      <br>
      Grapes: <input type="checkbox" name="fruits[]" value="grapes">
      <br>
      <input type="submit">
    </form>
    <br>
    <?php
      $fruits = $_POST["fruits"];
      echo $fruits[0];
      echo "<br>";
      echo $fruits[1];
      echo "<br>";
      echo $fruits[2];


    ?>

  </body>
</html>
