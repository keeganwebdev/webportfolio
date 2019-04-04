<?php
include "../inc/database.php";
if(isset($_POST['register'])){
  $name_check="SELECT  * from user where name = '".$_POST['name']."'";
  $name_result=mysqli_query($connect,$name_check);
  if(mysqli_num_rows($name_result)>0){
    $fail=true;
    echo "<script>
    alert('there is already a user with that info ');
    window.location.href='../adminpages/registry.php';
    </script>";
  }
  $un_check="SELECT  * from user where username = '".$_POST['username']."'";
  $un_result=mysqli_query($connect,$un_check);
  if(mysqli_num_rows($un_result)>0){

    $fail=true;
    echo "<script>
    alert('there is already a user with that info ');
    window.location.href='../adminpages/registry.php';
    </script>";
  }
  if(!isset($fail)){
$insert_user="INSERT INTO `user`(`username`, `password`, `name`, `usertypeID`) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."',2)";
$result=mysqli_query($connect,$insert_user);
echo $insert_user;
echo "it works";

}
}
