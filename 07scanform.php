<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scan/Form</title>
  </head>
  <body>

    <form action="07scanform.php" method="get">
      Name: <input type="text" name="username">
      <br>
      Age: <input type="number" name="age">
      <br>
      <input type="submit">
    </form>
    <br>
    Your Name is <?php echo $_GET["username"] ?>
    <br>
    Your Age is <?php echo $_GET["age"] ?>

  </body>
</html>
