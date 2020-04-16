<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inheritance</title>
  </head>
  <body>

    <?php
      class Chef{
        function makeChicken(){
          echo "The Chef Makes Chicken.<br>";
        }
        function makeSalad(){
          echo "The Chef Makes Salad.<br>";
        }
        function makeSpecialDish(){
          echo "The Chef Makes Special BBQ Ribs.<br>";
        }

      }

      class ItalianChef extends Chef{
        function makePasta(){
          echo "The Chef Makes Pasta.";
        }
        function makeSpecialDish(){
          echo "The Chef Makes Special Italian Pizza.";
        }
      }


      $chef = new Chef();
      $chef->makeChicken();
      $chef = new Chef();
      $chef->makeSpecialDish();

      $ichef = new ItalianChef();
      $ichef->makeSalad();
      $ichef = new ItalianChef();
      $ichef->makeSpecialDish();

    ?>


  </body>
</html>
