<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/logincheck.php";
$getting_info = "SELECT * FROM `classroom` join user on user.name=classteacher.teacher where user.userid='".$_SESSION['user']."'";
$result=mysqli_query($connect,$getting_info);
while($row=mysqli_fetch_assoc($result)){
    $classroom=$row['classname'];
    $start=$row['class_start_time'];
  $end=$row['class_end_time'];
  $location=$row['classlocation'];
  echo "</br><a href='../adminpages/teachclasses.php?class=$classroom'>$classroom | $location </a> </br>$start</br>$end";
  }
?>
