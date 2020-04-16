<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Constructors</title>
  </head>
  <body>

    <?php

    class Book{
      var $title;
      var $author;
      var $pages;

      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;

      }
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);
    $book2 = new Book("Lord of the Rings", "Tolkien", 700);

    echo "Book 1";
    echo "<br>";
    echo "Title: $book1->title";
    echo "<br>";
    echo "Author: $book1->author";
    echo "<br>";
    echo "Pages: $book1->pages";

    echo "<br><br>";

    echo "Book 2";
    echo "<br>";
    echo "Title: $book2->title";
    echo "<br>";
    echo "Author: $book2->author";
    echo "<br>";
    echo "Pages: $book2->pages";

    ?>



  </body>
</html>
