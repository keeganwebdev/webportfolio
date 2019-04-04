<?php
include "../inc/database.php";
if(isset($_POST['delete'])){
  $student_number=$_GET['deletestudent'];
  $delete_student="DELETE from attendance where attendanceid = '".$student_number."'";
  $result=mysqli_query($connect,$delete_student);
   echo  "<script>window.open('../adminpages/editstudentlist.php','_self')</script>";
} ?>
