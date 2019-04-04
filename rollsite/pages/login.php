




<?php
include "../inc/header.php";
session_start();
if($_SESSION['usertypeID']==1){
     echo "<script>window.open('../admin/adminpages/adminindex.php','_self')</script>";
}
if($_SESSION['usertypeID']==2){

  echo "<script>
window.location.href='../pages/stuffpage.php','_self';
</script>";
}else{
echo '<script src="../js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>';
echo '<form class="login" method="post" action="../inc/loginprocess.php">
    <p class="title">Log in</p>
    <input type="text" name="username" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" name="password" />
    <i class="fa fa-key"></i>
    <button>
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>

  </p>

 '
  ;
}
?>
<?php  include "../inc/footer.php"; ?>
