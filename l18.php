<!-- topic: Switch Statements-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l18.php" method = "POST">
       What was your grade?
      <input type="text" name="grade" id=""><br>
      <input type="submit" value="Submit">
    </form>
    <?php 
        $grade = $_POST["grade"];

        switch($grade){
            case "A":
                echo "You did amazing";
            break;

            case "B":
                echo "You did pretty good";
            break;

            case "C":
                echo "You did good";
            break;
            default:
                echo "Invalid case";
        }
    ?>    
</body>
</html>