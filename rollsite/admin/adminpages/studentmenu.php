<?php 
include"../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";

$student_info="SELECT MIN(`enrollID`) AS id, studentID FROM enrollment join classroom on enrollment.classid=classroom.classid join attendance on classroom.classteacher=attendance.teacher  group by studentID";
$result=mysqli_query($connect,$student_info);
while($row = mysqli_fetch_assoc($result)){
   
    $student=$row['studentID'];
  
   echo "</br><a href='../adminpages/studentclasses.php?student=$student'>$student </a>";

}
 
?>