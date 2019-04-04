<?php
include "../inc/database.php";
if(isset($_POST['update'])){
    if($_POST['class_d']){
   $teacher= $_GET['editteacher'];
$update_teacher="UPDATE `classroom` SET `classlocation`='".$_POST['location']."',`classname`='".$_POST['class_d']."',`class_start_time`='".$_POST['start_time']."',`class_end_time`='".$_POST['end_time']."',`classteacher`='".$_POST['teacher']."' WHERE `classteacher`='$teacher'";
    $result=mysqli_query($connect,$update_teacher);
    echo $update_teacher;
     echo  "<script>window.open('../adminpages/editteacherlist.php','_self')</script>";
}
if($_POST['classroom']){
  $teacher= $_GET['editteacher'];
$update_teacher="UPDATE `classroom` SET `classlocation`='".$_POST['location']."',`classname`='".$_POST['classroom']."',`class_start_time`='".$_POST['start_time']."',`class_end_time`='".$_POST['end_time']."',`classteacher`='".$_POST['teacher']."' WHERE `classteacher`='$teacher'";
    $result=mysqli_query($connect,$update_teacher);
    echo $update_teacher;
     echo  "<script>window.open('../adminpages/editteacherlist.php','_self')</script>";
}
}

?>