<!-- Topic: getting user input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    
    <form action="l8.php" method= "POST">
        Name: <input type="text" name="name" id="">
        
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php  
        echo $_POST["name"];
    ?>

</body>
</html>