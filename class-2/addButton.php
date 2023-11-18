<?php
if(isset($_GET["add"])){
    if(isset($_GET["num1"])){
        $firstNum=$_GET["num1"];
        if(isset($_GET["num2"])){
            $secondNum=$_GET["num2"];
            echo $add=$firstNum+$secondNum;
        }
    }
}
else if(isset($_GET["min"])){
    if(isset($_GET["num1"])){
        $firstNum=$_GET["num1"];
        if(isset($_GET["num2"])){
            $secondNum=$_GET["num2"];
            echo $add=$firstNum-$secondNum;
        }
    }
    // else if(isset($_GET["num1"])<$_GET["num2"]){
    //     echo "num1 should be getter than num 2";
    // }
}
// else if(isset($_GET["min"])){
//     if(isset($_GET["num1"])>$_GET["num2"]){
//         if(isset($_GET["num1"])){
//             $firstNum=$_GET["num1"];
//             if(isset($_GET["num2"])){
//                 $secondNum=$_GET["num2"];
//                 echo $add=$firstNum-$secondNum;
//             }
//         }
//     }
    
//     else if(isset($_GET["num1"])<$_GET["num2"]){
//         echo "num1 should be getter than num 2";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple add</title>
</head>
<body>
    <form method="GET">
        <div>
            <p>First Number: </p>
            <input type="number" name="num1">
        </div>
        <div>
            <p>Second Number: </p>
            <input type="number" name="num2">
        </div>
      
        <div style="margin-top:15px">
            <input type="submit" value="+" name="add">
            <input type="submit" value="-" name="min">
        </div>
    </form>
</body>
</html>