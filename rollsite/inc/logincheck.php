
 <?php

 include "../inc/database.php";
 session_start();
 if($_SESSION['usertypeID']==2){
     echo "<script>window.open('../pages/stuffpage.php','_self';)</script>";
}
if($_SESSION['usertypeID']==1){

  echo "<script>
alert('Well this is arkward :( ');
window.location.href='../admin/adminpages/adminindex.php','_self';
</script>";
}
 if (!isset($_SESSION['usertypeID']))
 {
      echo "<script>
alert('Sorry You Are Not Logged In');
window.location.href='../pages/login.php','_self';
</script>";


 }

 ?>
