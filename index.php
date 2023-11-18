<?php  
echo "add,sub,multiply and divide within array element:";
echo "<br/>";
$number=array(10,20,30,40,50,60,70,80);
$sum=$number[0]+$number[1];
echo "Sum: ",$sum."<br/>";
// echo "<br/>";
$substraction=$number[3]-$number[2];
echo "substraction: ",$substraction."<br/>";
// echo "<br/>";
$multiply=$number[4]*$number[5];
echo "multiply: ",$multiply."<br/>";
// echo "<br/>";
$divide=$number[7]/$number[0];
echo  "divide: ",$divide."<br/>";
// echo "<br/>";
echo "add,sub,multiply and divide without array element:";
echo "<br/>";
$a=20;
$b=30;
$sum1=$a+$b;
echo "sum1:",$sum1."<br/>";
// echo "<br/>";
$x=40;
$y=15;
$sub1=$x-$y;
echo "sub1:",$sub1."<br/>";
// echo "<br/>";
$c=10;
$d=10;
$multiply1=$c*$d;
echo "multiply1:",$multiply1."<br/>";
// echo "<br/>";
$e=100;
$f=10;
$divide1=$e/$f;
echo "divide1:",$divide1."<br/>";
// echo "<br/>";
?> 
<h1><?php
echo "Sum: ",$sum."<br/>";
?></h1> 
<h2><?php
echo "substraction: ",$substraction."<br/>";
?></h2> 
<h3><?php
echo "multiply: ",$multiply."<br/>";
?></h3> 
<h4><?php
echo  "divide: ",$divide."<br/>";
?></h4> 
<h5><?php
echo "sum1:",$sum1."<br/>";
?></h5> 
<p style><?php
echo "add,sub,multiply and divide without array element:";
echo "<br/>";
?></p> 
