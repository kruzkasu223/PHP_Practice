<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>String</title>
  </head>
  <body>

    <?php
      $s = "Krushang Kasundra";
      echo $s; #you can put antything at $s...
      echo "<br>";
      echo strtoupper($s); #as in put "KruZ" where $s...
      echo "<br>";
      echo strtolower($s);
      echo "<br>";
      echo strlen($s);
      echo "<br>";
      echo $s[0];
      echo "<br>";
      echo str_replace("Krushang", "KruZ", $s);
      echo "<br>";
      echo substr($s, 0, 8);
      echo "<br>";
      $s[0] = "A";
      echo $s;
    ?>

  </body>
</html>
