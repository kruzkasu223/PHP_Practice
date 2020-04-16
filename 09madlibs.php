<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mad Libs</title>
  </head>
  <body>

    <form action="09madlibs.php" method="get">
      Color: <br><input type="text" name="color">
      <br>
      Plural Noun: <br><input type="text" name="pnoun">
      <br>
      Crush Name: <br><input type="text" name="crush">
      <br>
      <input type="submit">
    </form>
    <br><br>

    <?php
      $color = $_GET["color"];
      $pnoun = $_GET["pnoun"];
      $crush = $_GET["crush"];
      echo "Roses are $color <br>";
      echo "$pnoun are blue <br>";
      echo "I Love $crush";
    ?>


  </body>
</html>
