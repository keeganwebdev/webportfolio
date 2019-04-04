<?php
session_start();
 ?>

 <?php
 if($_SESSION['usertypeID']==1){
     echo "<script>window.open('../adminpages/adminindex.php')</script>";
}
if($_SESSION['usertypeID']==2){

  echo "<script>
alert('Sorry You Permission for Admin Control');
window.location.href='../../pages/stuffpage.php';
</script>";
}
 if (!isset($_SESSION['usertypeID']))
 {
 echo "<script>
alert('Sorry You Are Not Logged In');
window.location.href='../pages/login.php';
</script>";
}


 ?>
