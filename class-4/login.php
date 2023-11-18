<?php
if (isset($_POST['button'])) {
    $con = mysqli_connect("localhost", "root", "", "phplogin");
    if (!$con) {
        echo "Not connected";
    }
    $login_sql = "SELECT * FROM `logintable` WHERE user_email='$_POST[user_email]' and user_password='$_POST[user_password]'";
    $result = mysqli_query($con, $login_sql);
    $final_result = mysqli_fetch_assoc($result);
    // print_r($final_result);
    if ($final_result) {
        session_start();
        $_SESSION["s_user_name"] = $finalresult['user_name'];
        header('Location: loginSuccess.php');
    } else {
        echo "user name or pass error";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        .form-style {
            display: flex;
            justify-content: center;


        }

        .form-style form {
            border: 1px solid;
            padding: 40px;
            background-color: aquamarine;
        }

        .input-style {
            margin-bottom: 10%;
        }

        .btn {
            display: flex;
            justify-content: center;
        }

        .btn input {
            height: 30px;
            width: 90px;
            background-color: bisque;
        }

        .btn input:hover {

            background-color: rosybrown;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-style">
        <form action="" method="post">
            <div class="input-style">
                <label for="user_email">Email:</label>
                <input style="margin-left: 43px;" type="email" name="user_email" id="user_email">
            </div>
            <div class="input-style">
                <label for="user_password">Password:</label>
                <input style="margin-left: 20px;" type="password" name="user_password" id="user_password">
            </div>

            <div class="btn">
                <input type="submit" value="Login" name="button">
            </div>

        </form>
    </div>
</body>

</html>