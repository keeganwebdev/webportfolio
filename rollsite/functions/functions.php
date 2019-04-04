<?php
session_start();
if(isset($_SESSION['usertype'])){
  $user_type=$_SESSION['usertype'];
}else{
  $user_type='anon';
}
if(isset($_GET['loginprocess'])){
  if($_POST['username']=='admin'){
    $_SESSION['user_type']='admin';
    $user_type='admin';
  }  elseif($_POST['username']=='user'){
    $_SESSION['user_type']='authen';
      $user_type='authen';
    }else{
      $user_type='anon';
    }
}
if($user_type!=='anon'){
  echo "this system is for use by teachers and administrators only.";


}

?>
