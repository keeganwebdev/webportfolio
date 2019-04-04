<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";
$getting_number="select * from attendance where attendance_student = '".$_GET['student']."'";
$number=mysqli_query($connect,$getting_number);
while($row=mysqli_fetch_assoc($number)){
    $student_number=$row['student_number'];
   
}
$getting_info="SELECT * FROM `attendance` join class_activity on attendance.`attendance_class_act`=class_activity.activityid join classroom on class_activity.activityclassroom=classroom.classname where student_number='".$student_number."'";
$result=mysqli_query($connect,$getting_info);
echo'<table class="rwd-table">
                <th>Student Name</th>
                <th>Class Day</th>
                <th>Classroom</th>
                <th>Teacher</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Date</th>
                <th>Present</th>';

while($row=mysqli_fetch_assoc($result)){
    $classroom=$row['classname'];
    $name=$row['attendance_student'];
    $day=$row['activityid'];
    $start=$row['class_start_time'];
    $end=$row['class_end_time'];
    $date=$row['activitydate'];
    $teacher=$row['teacher'];
    $status=$row['attendancestatues'];
    echo '<tr> 
    <td>'.$name.'</td>
    <td>'.$day.'</td>
    <td>'.$classroom.'</td>
    <td>'.$teacher.'</td>
    <td>'.$start.'</td>
    <td>'.$end.'</td>
    <td>'.$date.'</td>
    <td>'.$status.'</td>';
}
?>
