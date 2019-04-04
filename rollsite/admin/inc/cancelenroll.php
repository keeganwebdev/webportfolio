<?php 
include "../inc/database.php";
$cancelenroll="DELETE FROM `enrollment` WHERE enrollID='".$_GET['cancel']."'";
$result=mysqli_query($connect,$cancelenroll);
  echo  "<script>window.open('../adminpages/enroll_list.php','_self')</script>";
        
?>
