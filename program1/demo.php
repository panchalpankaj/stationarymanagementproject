<?php

$host='localhost';
$user='root';
$pass='';
$db='mydb1';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
  echo "connected successfully.....!!!!!<br>";
  
 $sql="insert into dept_master(Dept_No,Dept_Name,Location)values(1,'car loan','sbi');";
 $query=mysqli_query($con,$sql);
 if($query)
  echo"data inserted...!!!";
 else
  echo"error in inserting...!!!";
?>  
 