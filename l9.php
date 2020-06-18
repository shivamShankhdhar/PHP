<!-- Topic: basic calculater -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    
    <form action="l9.php" method= "GET">
        <input type="number" name="1st_number" id="">        
        <br>
        <input type="number" name="2nd_number" id="">
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
    Answer: <?php  
        echo $_GET["1st_number"] + $_GET["2nd_number"];
    ?>

</body>
</html>