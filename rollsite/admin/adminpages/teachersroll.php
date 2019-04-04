<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";
session_start();
$getting_info="SELECT * from attendance where `attendance_class_act` = '".$_GET['class']."' and  teacher = '".$_SESSION['teacher']."' and attendancelocation='".$_SESSION['location']."'";
$result=mysqli_query($connect,$getting_info);
echo'<table class="rwd-table">
<th>Student Number</th>
                <th>Student Name</th>
                <th>Present</th>';
while($row=mysqli_fetch_assoc($result)){
     $attendance_id=$row['attendanceid'];
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];
                         $status=$row['attendancestatues'];
                         echo '<tr><td>'.$student_number.'</td>
<td>'.$student_name.'</td>  
  <td>'.$status.'</td>';
                         
}
unset($_SESSION['teacher']);
?>