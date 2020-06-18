<!-- topic: Loops-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
    //    $i = 1;
    //    while ($i <= 10){
    //        echo $i;
    //        echo "<br>";
    //        $i++;
    //    }
    $lucky_numbers = array(4, 3, 6, 8, 10, 12, 13, 14, 16, 18);
       for($i = 0; $i<=count($lucky_numbers); $i++){
           echo "$lucky_numbers[$i] <br>";
           
       }
    ?>    
</body>
</html>