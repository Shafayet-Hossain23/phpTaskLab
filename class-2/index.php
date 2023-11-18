<?php
if(isset($_GET["num1"])){
    $firstNum=$_GET["num1"];
    if(isset($_GET["num2"])){
        $secondNum=$_GET["num2"];
        echo $add=$firstNum+$secondNum;
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form method="GET">
        <div>
            <p>Give a Number: </p>
            <input type="number" name="num1">
        </div>
        <div>
            <p>Give a Number: </p>
            <input type="number" name="num2">
        </div>
      
        <div style="margin-top:15px">
            <input type="submit" value="Add two number">
        </div>
    </form>
</body>
</html>