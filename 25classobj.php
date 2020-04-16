<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Class and Object</title>
  </head>
  <body>

    <?php
      class Book{
        var $title;
        var $author;
        var $pages;
      }

      $book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = "400";

      $book2 = new Book;
      $book2->title = "Lord of the Rings";
      $book2->author = "Tolkien";
      $book2->pages = "700";

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
