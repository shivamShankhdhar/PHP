<!-- topic: Classes and Objects-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  //defining a class
    class Book{
        var $title;
        var $author;
        var $pages;
    }
//making an object
    $book1 = new Book;
    $book1->title = "Herry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 200;
 echo $book1->title;

  ?>    
</body>
</html>