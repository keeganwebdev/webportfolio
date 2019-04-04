<?php
include "../inc/database.php";
if(isset($_POST['update'])){

$edit_info=" UPDATE `user` SET `username`='".$_POST['username']."',`password`='".$_POST['password']."',`name`='".$_POST['name']."'  WHERE username='".$_GET['account']."'";
//$result=mysqli_query($connect,$getting_info);
$updateresult=mysqli_query($connect,$edit_info);
echo  "<script>window.open('../adminpages/editaccounts.php','_self')</script>";
}
?>
