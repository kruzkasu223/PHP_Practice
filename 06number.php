<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Numbers</title>
  </head>
  <body>
    <?php
      echo 9 + 3;
      echo "<br>";
      echo 9 - 3;
      echo "<br>";
      echo 9 * 3;
      echo "<br>";
      echo 9 / 3;
      echo "<br>";
      echo 9.3 * 3;
      echo "<br>";
      echo 9 % 3;
      echo "<br>";
      echo 9 + 3 * (9 - 6); #it uses pedmas
      echo "<br>";
      $a = 1;
      echo $a;
      echo "<br>";
      $a++;
      echo $a;
      echo "<br>";
      $a += 5;
      echo $a;
      echo "<br>";
      echo abs(-223);
      echo "<br>";
      echo pow(4, 2);
      echo "<br>";
      echo sqrt(16);
      echo "<br>";
      echo max(2, 4);
      echo "<br>";
      echo min(2, 4);
      echo "<br>";
      echo round(9.3);
      echo "<br>";
      echo round(9.6);
      echo "<br>";
      echo ceil(22.3);
      echo "<br>";
      echo floor(22.3);
    ?>
  </body>
</html>
