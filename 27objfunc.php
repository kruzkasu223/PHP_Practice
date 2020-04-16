<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Object Function</title>
  </head>
  <body>

    <?php

    class Student{
      var $name;
      var $age;
      var $spi;

      function __construct($name, $age, $spi){
        $this->name = $name;
        $this->age = $age;
        $this->spi = $spi;
      }

      function hon(){
        if($this->spi >= 3.5){
          return "You Have Honors.";
        }
        return "You Don't Have Honors.";
      }
    }

    $student1 = new Student("KruZ", "Computer", 8.3);
    $student2 = new Student("Jim", "Electrical", 3.5);
    $student3 = new Student("Pam", "Electrical", 2.9);

    echo $student1->hon();

    ?>


  </body>
</html>
