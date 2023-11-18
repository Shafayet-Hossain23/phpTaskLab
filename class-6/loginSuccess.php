<h1> welcome </h1>

<?php
session_start();
echo $_SESSION["s_user_name"];
?>
<br>
<a href="course.php"> course list </a><br>

<a href="user.php"> user list </a>