<?php





$con=mysqli_connect("localhost","root","","shop");
if(!$con)
{
    echo "error";
}
if(isset($_POST['p_button']))
{
    
$Name = $_POST['p_name'];

$price = $_POST['p_price'];
$description=$_POST['p_description'];


$t_name=$_FILES['p_img']['tmp_name'];
$file_name=$_FILES['p_img']['name'];


move_uploaded_file($t_name,"./pic/$file_name");

$query="insert into product(p_name,p_description,p_img,p_price)values('$Name','$description','$file_name','$price')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}



?> 



<html>

<head>

</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">

Name<input type="text" name="p_name"><br><br>
Image<input type="file" name="p_img"><br>
Description <input type="text" name="p_description"><br>
Price<input type="number" name="p_price">
<input type="submit" name="p_button" value="submit">
</form>



</body>
</html>









