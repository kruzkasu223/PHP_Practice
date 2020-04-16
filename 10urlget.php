<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>URL Parameter Get</title>
  </head>
  <body>

    <form action="10urlget.php" method="get">
      Name: <br><input type="text" name="name">
      <br>
      <input type="submit">
    </form>
    <br>
      <?php #you can print age by url changing with Get Method ?>
      <?php echo $_GET["name"] ?>
      <br>
      <?php echo $_GET["age"] ?>
    <br>

  </body>
</html>
