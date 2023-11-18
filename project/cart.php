<?php

$ip=$_SERVER['REMOTE_ADDR'];


$con=mysqli_connect("localhost","root","","shop");

$query="select * from temp_cart where cu_id='$ip'";
$data=mysqli_query($con,$query);



//=======================delete=====


if(isset($_GET['btndelete']))
{
    $query="DELETE FROM temp_cart where cp_id='$_GET[did]' ";
    if (mysqli_query($con, $query)) {
       
        echo "<script> alert('Record deleted successfully')  </script>";
      } 
      else {
        echo "Error deleting record: " . mysqli_error($con);
      }

}
  
?>


<table border="1px" width="90%">


<tr>

<td>cp_price </td>
<td> Qty</td>
<td> Total price</td>
<td> cp_product_id</td>
<td> Action</td>
</tr>

<?php 
        $amount1=0;
        $user=0;
        while($result= mysqli_fetch_assoc($data)){

        ?>

<tr>

<td> <?php echo $result["cp_price"];?> </td>

<td> <?php echo $result["qty"];?></td>

<td> <?php  $amount=$result["qty"]* $result["cp_price"];

echo $amount;
?></td>
<td><?php echo $result["cp_product_id"];?></td>
<td> <a href="?btndelete=del&did=<?php echo $result["cp_id"];?>"> <?php echo $result["cp_id"];?> Delete</a></td>
<td>
                  <?php 
            $tem_tbl_id= $result["cp_product_id"];
            $query22="SELECT * FROM `product` where p_id='$tem_tbl_id'";
            $data11=mysqli_query($con,$query22);
            $final_res=mysqli_fetch_assoc($data11);

          ?>
    
            <img src="./admin/pic/<?php   echo $final_res['p_img']; ?>" width="70px" height="70px">
        
        
          </td>
</tr>


<?php
 $amount1+=$amount;
echo $user= $result["cp_id"];
} ?>

<tr>
<td colspan="3"> Total Price </td>

<td colspan="2"><?php echo $amount1;?> </td>

</tr>

</table>
<a href="stripe/index.php?user=<?php echo $user;?>&amount=<?php echo $amount1;?>"> pay </a>

