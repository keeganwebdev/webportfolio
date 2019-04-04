<?php
include "../inc/database.php";
if(isset($_POST['update'])){
    if($_POST['class_d']){
$day=$_GET['editclass'];
$updateclass="UPDATE `class_activity` SET `activityclassroom`='".$_POST['class_d']."',`activitydate`='".$_POST['date']."' where activityID='".$day."'";
$result=mysqli_query($connect,$updateclass);
 echo  "<script>window.open('../adminpages/editclasslist.php','_self')</script>";
}
if($_POST['classroom'])
{
    $day=$_GET['editclass'];
$updateclass="UPDATE `class_activity` SET `activityclassroom`='".$_POST['classroom']."',`activitydate`='".$_POST['date']."' where activityID='".$day."'";
$result=mysqli_query($connect,$updateclass);
 echo  "<script>window.open('../adminpages/editclasslist.php','_self')</script>";
}
}
?>
