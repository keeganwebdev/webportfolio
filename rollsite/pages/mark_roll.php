<?php include "../inc/header.php";
include_once "../inc/database.php";
include "../inc/logincheck.php";?>
<?php
global $connect;
session_start();
$query = "SELECT * FROM `attendance` join user on user.name=attendance.teacher where user.userid='".$_SESSION['user']."' and attendance.attendance_class_act='".$_GET['class']."' and attendance.attendancelocation='".$_SESSION['location']."'";
$array = array();
$array_get=  mysqli_query($connect,$query);
$day=$_GET['class'];
echo'<table class="rwd-table">
<th>Student Number</th>
                <th>Student Name</th>
                <th>Present</th>';

while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $attendance_id=$row['attendanceid'];
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];
                         echo '
    <tr>
<td>'.$student_number.'</td>
<td>'.$student_name.'</td>
<td><form method="post" action="mark_roll.php"><input type="checkbox" name='.$attendance_id.' value="present"></td>
<input type="hidden" name="attenid[]" value='.$attendance_id.'>
';

}



;
echo '</table><input type="submit" name="submit" value="submit"></tr></form>';


if(isset($_POST['submit'])){
  global $connect;
$query = "SELECT * FROM `attendance` join user on user.name=attendance.teacher where user.userid='".$_SESSION['user']."'";
$array = array();
$array_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $attendance_id=$row['attendanceid'];
    if (isset($_POST[''.$attendance_id.''])){
			$query2="update attendance  set `attendancestatues`='present' where attendanceid =$attendance_id and attendancelocation='".$_SESSION['location']."'";
			$run_statuses = mysqli_query($connect, $query2);
                       echo "\n".$query2."\n";
                        echo "\nworking..\n";
                        echo  "<script>window.open('../pages/stuffpage.php','_self')</script>";
}
 else {
    $query2="update attendance  set `attendancestatues`='absent' where attendanceid =$attendance_id and attendancelocation='".$_SESSION['location']."'";
			$run_statuses = mysqli_query($connect, $query2);
                       echo "\n".$query2."\n";
                        echo "\nworking..\n";
                        echo  "<script>window.open('../pages/stuffpage.php','_self')</script>";


 }
}
unset($_SESSION['location']);
}

//unset($_SESSION['date']);

?>
<?php
include "../inc/footer.php";
?>
