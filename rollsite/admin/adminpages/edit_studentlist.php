<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";
?>
<?php
global $connect;
$select_students= "SELECT  distinct * FROM `attendance`";
$select_infosql=mysqli_query($connect,$select_students);
echo'<table class="rwd-table">
<th>Student Number</th>
                <th>Student Name</th>
                <th>Class Day</th>
                ';
while($row = mysqli_fetch_assoc($select_infosql)){

                         $attendance_id=$row['attendanceid'];
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];
                         $day=$row['attendance_class_act'];
                         $teacher=$row['teacher'];
                         $location=$row['attendancelocation'];
                         echo '  <tr>
<td>'.$student_number.'</td>
<td>'.$student_name.'</td>
    <td>'.$day.'</td>
 <td><form method="post" action="edit_student.php?editstudent='.$student_number.'&day='.$day.'&teacher='.$teacher.'&location='.$location.'"><button type="submit" name="edit" >Edit Student Info</button></td></form>
 <td><form method="post" action="../inc/delete_student.php?deletestudent='.$attendance_id.'"><button type="submit" name="delete" >Delete Student</button></td></form>';
}
?>
