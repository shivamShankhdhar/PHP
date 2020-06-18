<!-- topic: Better Calculater-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l17.php" method = "POST">
        First Number: <input type="number" name="num1" id=""><br>
        Second NUmber: <input type="number" name="num2" id=""><br>
        Operation: <input type="text" name="op" id=""><br>
        <input type="submit" value="Submit">
    </form>
    <?php 
       $first_num = $_POST["num1"];
       $second_num = $_POST["num2"];
       $op = $_POST["op"];

       $answer = 0;

       if ($op == "+"){
           $answer = ($first_num + $second_num);
       }elseif($op == "-"){
            $answer = ($first_num - $second_num);
       }elseif($op == "*"){
            $answer = ($first_num * $second_num);
       }elseif($op == "/"){
            $answer = ($first_num / $second_num);
       }else{
           echo "Unrecognised operation";
       }
      
      if ($answer!= 0){ echo "Answer = $answer";}
    ?>    
</body>
</html>