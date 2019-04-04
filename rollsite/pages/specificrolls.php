<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/logincheck.php";
$getting_info="SELECT * FROM `class_activity` WHERE `activityclassroom` ='".$_GET['class']."'";
$result=mysqli_query($connect,$getting_info);
$_SESSION['location']=$_GET['location'];
while($row=mysqli_fetch_assoc($result)){
    $classroom=$row['activityclassroom'];
    $day=$row['activityid'];
    $date=$row['activitydate'];
    echo "</br><a href='../pages/mark_roll.php?class=$day'>$day|$date</a>";

}
?>
