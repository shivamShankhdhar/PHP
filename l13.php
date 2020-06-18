<!-- topic: checkboxes inputes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="l13.php" method = "POST">
    Apples: <input type="checkbox" name="fruits[]" value = "apples"> <br>
    Orange: <input type="checkbox" name="fruits[]" value = "orange"> <br>
    Pears: <input type="checkbox" name="fruits[]" value = "pears">
    <input type="submit" value="Submit">
</form>
    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
        
    ?>    
</body>
</html>