<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Return Statement</title>
  </head>
  <body>

    <?php

      function cube($num){
        return $num * $num * $num;
        echo "Hi"; #this will not going to print
      }

      echo cube(2);

    ?>

  </body>
</html>
