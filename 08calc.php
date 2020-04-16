<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>

    <form action="08calc.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <br>
      <input type="submit">
    </form>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
  </body>
</html>
