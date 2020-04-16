<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Datatype</title>
  </head>
  <body>

    <?php
      $name = "Krushang"; #string
      $age = 18; #int
      $spi = 8.30; #float
      $Gender = true; #boolean
      $no = null;
      echo nl2br("Name: $name\n");
      echo nl2br("Age: $age\n");
      echo nl2br("SPI: $spi\n");
      echo "Gender: ";
      if($Gender){
        echo "Male";
      }
      else{
        echo "Female";
      }
      echo nl2br("\njust nothing. $no said you there is nothing.");
    ?>

  </body>
</html>
