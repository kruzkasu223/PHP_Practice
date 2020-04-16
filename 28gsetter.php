<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Getter and Setter</title>
  </head>
  <body>

    <?php
      class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
          $this->title = $title;
          $this->setRating($rating);
        }
        function getRating(){
          return $this->rating;
        }
        function setRating($rating){
          if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R"){
            $this->rating = $rating;
          }
          else{
            $this->rating = "NR";
          }
        }
      }

      $movie1 = new Movie("Avengers", "fdgd");

      $movie1->setRating("PG-13");
      echo $movie1->getRating();

    ?>

  </body>
</html>
