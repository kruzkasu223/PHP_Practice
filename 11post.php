<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Method</title>
  </head>
  <body>
    <?php #post method doesn't show up in url & can't change by url ?>
    <form action="11post.php" method="post">
      Password: <br><input type="password" name="password">

      <br>
      <input type="submit">
    </form>
    <br>
    <?php echo $_POST["password"] ?>

  </body>
</html>
