<?php
session_start();
include "../inc/database.php";
$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'"; //SQL query
$result = mysqli_query($connect, $sql) or die(mysqli_error($connect)); //run the query
if(mysqli_num_rows($result) == 1) //if the number of matching records equals 1 and employee is numeric
{
	$row = mysqli_fetch_assoc($result); //create a variable called '$row' to store the results
        $_SESSION['user']=$row['userid'];
	$_SESSION['login'] = $row['username']; //start a session called 'login' to have a value of 'employeeFirstName'
  	$_SESSION['usertypeID'] =$row['usertypeID'];

      if($_SESSION['usertypeID']==1){

        	echo "<script>window.open('../admin/adminpages/adminindex.php','_self')</script>";
}
if($_SESSION['usertypeID']==2){
  echo  "<script>window.open('../pages/stuffpage.php','_self')</script>";
}

}if(mysqli_num_rows($result) == 0) {
    echo "<script>alert('Sorry the information you have entered is invalid! Please check your username and password!');
window.location.href='../pages/login.php','_self';</script>";

}?>
