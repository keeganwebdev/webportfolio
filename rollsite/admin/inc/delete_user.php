<?php
include "../inc/database.php";
global $connect;
if(isset($_POST['delete'])){
$delete="DELETE from user where username='".$_GET['deleteuser']."';";
$result=mysqli_query($connect,$delete);
 echo  "<script>window.open('../adminpages/editaccounts.php','_self')</script>";
}

?>
