<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>

    <?php
      $i = 1;
      while($i <= 5){
        echo "$i <br>";
        $i++;
      }


    ?>
    <br><br>
    <?php
      $i = 6;
      do{
        echo "$i <br>";
        $i++;
      }while($i <= 5);


    ?>



  </body>
</html>
