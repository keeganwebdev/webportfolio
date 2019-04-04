<?php
include "../inc/database.php";
if(isset($_POST['delete'])){
  $room=$_GET['deleteclass'];
  $deleteclass="Delete from class_activity where  activityclassroom='".$room."'";
  $result=mysqli_query($connect,$deleteclass);
   echo  "<script>window.open('../adminpages/editclasslist.php','_self')</script>";
}?>
