<!-- Topic: BUilding a mad Libs Game -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    
    <form action="l10.php" method= "GET">
        Color: <input type="text" name="color" >        
        <br>
         PLural Noun:<input type="text" name="plural_noun" >
        <br>
        Celebrity: <input type="text" name="celebrity">
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
   <?php  
        $color = $_GET["color"];
        $plural_noun = $_GET["plural_noun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color";
        echo "<br>";
        echo " $plural_noun are blue " ;
        echo "<br>";
        echo "I Love $celebrity";
    ?>

</body>
</html>