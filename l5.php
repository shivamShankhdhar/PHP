<!-- Topic: Strings -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    <?php 
      $phrase = "This is shivam <br>"; #strings
      echo str_replace("This", "That", $phrase );
      
      echo substr($phrase, 0, 3);
     ?>

</body>
</html>