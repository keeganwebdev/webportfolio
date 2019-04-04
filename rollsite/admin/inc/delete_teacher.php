<?php
include "../inc/database.php";
if(isset($_POST['delete'])){
  $teacher=$_GET['deleteteacher'];
  $classroom=$_GET['classroom'];
  $delete_teacher="DELETE from classroom where classteacher = '".$teacher."' and classname='".$classroom."'";
  $result=mysqli_query($connect,$delete_teacher);
   echo  "<script>window.open('../adminpages/edit_teacherlist.php','_self')</script>";
} ?>
