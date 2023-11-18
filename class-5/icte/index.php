<?php
 if(isset($_POST['btn'])){
$host="localhost";

$con=mysqli_connect($host, "root", "", "icte");
if(!$con){
	echo "NOT connected";
}

$login_sql="SELECT * FROM `user` WHERE user_email='$_POST[email]' and user_pass='$_POST[password]'";

$result=mysqli_query($con,$login_sql);
$final_result=mysqli_fetch_assoc($result);
if($final_result){
	  session_start();
	 $_SESSION["s_user_name"]= $final_result['user_name'];
	
	 header('Location: admin.php');
}else{
	echo "user or pass error";
}

 }
//print_r($final_result);

?>

<form action="" method="post">
<input type="email" name="email"> 
<input type="password" name="password">

<input type="submit" name="btn" value="login">

</form>