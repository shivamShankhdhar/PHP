<!-- Topic: URL Parameters-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    
    <form action="l11.php" method= "post">
        Name: <input type="text" name="name" >        
       <input type="submit" value="Submit">
    </form>
    <br>
   <?php  
       echo $_POST["name"];
    ?>

</body>
</html>