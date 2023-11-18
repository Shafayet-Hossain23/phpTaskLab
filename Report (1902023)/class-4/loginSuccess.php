<?php
session_start();
echo $_SESSION["s_user_name"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login successfully</title>
    <style>
        .success {
            display: flex;
            justify-content: center;
        }

        .success div {
            background-color: greenyellow;
            padding: 40px;
            border: 1px solid;
        }
    </style>
</head>

<body>
    <div class="success">
        <div>
            <h2>Congratulations</h2>
            <p style="text-align: center;">Successfully login as admin!</p>

            <p style="text-align: center;">user_name:"admin"</p>


        </div>
    </div>
</body>

</html>