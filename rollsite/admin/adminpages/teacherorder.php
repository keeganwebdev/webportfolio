<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";
session_start();
$getting_info="SELECT * FROM `classroom` where classteacher='".$_GET['teacher']."'";
$result=mysqli_query($connect,$getting_info);
$_SESSION['teacher']=$_GET['teacher'];
while($row=mysqli_fetch_assoc($result)){
    $classroom=$row['classname'];
    $start=$row['class_start_time'];
  $end=$row['class_end_time'];
  $location=$row['classlocation'];
  echo '';
echo "</br><a href='../adminpages/teachclasses.php?class=$classroom&location=$location'>$classroom | $location </a> </br>$start</br>$end";
}
?>
