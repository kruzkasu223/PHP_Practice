<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Switch Statement</title>
  </head>
  <body>

    <form action="20switch.php" method="post">

      What is Your Grade?
      <br>
      <input type="text" name="grade">

      <br>
      <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    switch ($grade) {
      case "A":
        echo "You Did AMAZING!";
        break;
      case "B":
        echo "You Did Good.";
        break;
      case "C":
        echo "You Can Do Better Next Time.";
        break;
      case "D":
        echo "You Should Try Harder.";
        break;
      case "F":
        echo "YOU FAIL! You Should Study Really Hard.";
        break;
      default:
        echo "Please Enter Valid Grade.";
        break;
      }


    ?>


  </body>
</html>
