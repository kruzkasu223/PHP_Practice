<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Function</title>
  </head>
  <body>

    <?php
      function sayHi(){
        echo "Hello";
      }

      sayHi();
    ?>
    <br>
    <?php
      function sayHin($name, $age){
        echo "Hello $name, you are $age <br>";
      }

      sayHin("KruZ", 18);
      sayHin("Tom", 20);
      sayHin("Mike", 24);
    ?>

  </body>
</html>
