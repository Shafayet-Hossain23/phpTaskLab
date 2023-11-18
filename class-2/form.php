<?php
if(isset($_GET["userName"])){
    $userName=$_GET("userName");
    if(isset($_GET["password"])){
        $password=$_GET("password");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="GET">
        <div>
            <p>Your User Name: </p>
            <input type="text" name="userName" id="">
        </div>
        <div>
            <p>Your Password: </p>
            <input type="password" name="password" id="">
        </div>
        <div style="margin-top:15px">
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>