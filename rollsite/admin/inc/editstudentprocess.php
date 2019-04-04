<?php 
include "../inc/database.php";
if(isset($_POST['update'])){
     if($_POST['classdrop']||$_POST['teacher_d']){
   $student_number= $_GET['editstudent'];
    $update_student="UPDATE `attendance` SET `teacher`='".$_POST['teacher_d']."',`attendance_class_act`='".$_POST['classdrop']."',`attendance_student`='".$_POST['student']."',`attendancelocation`= '".$_POST['location']."' WHERE `student_number`=".$student_number;
    $result=mysqli_query($connect,$update_student);
    echo $update_student;
     echo  "<script>window.open('../adminpages/editstudentlist.php','_self')</script>";
}
 if($_POST['class_day']||$_POST['teacher']){
      $student_number= $_GET['editstudent'];
    $update_student="UPDATE `attendance` SET `teacher`='".$_POST['teacher']."',`attendance_class_act`='".$_POST['class_day']."',`attendance_student`='".$_POST['student']."',`attendancelocation`= '".$_POST['location']."' WHERE `student_number`=".$student_number;
    $result=mysqli_query($connect,$update_student);
    echo $update_student;
     echo  "<script>window.open('../adminpages/editstudentlist.php','_self')</script>";
 }
}
?>