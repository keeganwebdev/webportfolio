<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/logincheck.php";
session_start();
$getting_info = "SELECT  * FROM `classroom` join user on user.name=classroom.classteacher where user.userid='".$_SESSION['user']."'";
$result=mysqli_query($connect,$getting_info);
while($row=mysqli_fetch_assoc($result)){
    $classroom=$row['classname'];
    $start=$row['class_start_time'];
  $end=$row['class_end_time'];
  $location=$row['classlocation'];
  echo "</br><a href='../pages/editspecificrolls.php?class=$classroom&location=$location'>$classroom | $location </a> </br>$start</br>$end";
  }
?>
