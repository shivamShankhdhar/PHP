<!-- topic: Constructores-->
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

        function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }
//making an object
    $book1 = new Book("Herry Potter", "JK Rowling", 200 );
  
   echo $book1->title;

  ?>    
</body>
</html>