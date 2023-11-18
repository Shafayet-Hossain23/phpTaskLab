<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta user_name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="userConnection.php" method="post">
        <p>
            <label for="user_name">user_name:</label>
            <input type="text" name="user_name" id="user_name">
        </p>
        <p>
            <label for="user_email">user_email:</label>
            <input type="text" name="user_email" id="user_email">
        </p>
        <p>
            <label for="user_pass">user_pass:</label>
            <input type="text" name="user_pass" id="user_pass">
        </p>

        <input type="submit" value="Submit">
    </form>
</body>

</html>