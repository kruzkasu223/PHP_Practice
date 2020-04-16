<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If Else</title>
  </head>
  <body>


    <?php

    $isMale = true;
    $isTall = true;
    if($isMale && $isTall){
      echo "Tall Male";
    }
    elseif($isMale && !$isTall){
      echo "Short Male";
    }
    elseif(!$isMale && $isTall){
      echo "Tall Female";
    }
    else{
      echo "Short Female";
    }

    ?>


  </body>
</html>
