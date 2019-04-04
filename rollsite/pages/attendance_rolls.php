<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/logincheck.php";
session_start();
$getting_info="SELECT * from attendance join user on attendance.teacher=user.name where userid='".$_SESSION['user']."'";
$array = array();
$array_get=  mysqli_query($connect,$getting_info);
echo'<table class="rwd-table">
<th>Student Number</th>
                <th>Student Name</th>
                <th>Class Day</th>
                <th>Location</th>
                <th>Present</th>';

while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $attendance_id=$row['attendanceid'];
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];
                         $status=$row['attendancestatues'];
                         $day=$row['attendance_class_act'];
                         $location=$row['attendancelocation'];
                         echo '
    <tr>
<td>'.$student_number.'</td>
<td>'.$student_name.'</td>
    <td>'.$day.'</td>
    <td>'.$location.'</td>
<td>'.$status.'</td>';
}                    
?>