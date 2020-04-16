<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Complete Calculator</title>
  </head>
  <body>

    <form action="19calculator.php" method="post">

      ==>Supported Operations Addition(+), Subtraction(-), Multiplication(*), Division(/) and Modulus(%).<==
      <br>
      First Number: <input type="number" step="0.00001" name="num1">
      <br>
      Operator (+, -, *, /, %): <input type="text" name="op">
      <br>
      Second Number: <input type="number" step="0.00001" name="num2">
      <br>
      <br>
      <input type="submit">
    </form>
    <br>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
      $adds = $num1 + $num2;
      echo "$num1 + $num2 = $adds";
    }
    elseif($op == "-"){
      $subt = $num1 - $num2;
      echo "$num1 - $num2 = $subt";
    }
    elseif($op == "*"){
      $mult = $num1 * $num2;
      echo "$num1 * $num2 = $mult";
    }
    elseif($op == "/"){
      $divd = $num1 / $num2;
      echo "$num1 / $num2 = $divd";
    }
    elseif($op == "%"){
      $modl = $num1 % $num2;
      echo "$num1 % $num2 = $modl";
    }
    else{
      echo "Invalid Operator.";
    }

    ?>


  </body>
</html>
