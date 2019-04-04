<?php //include "../inc/header.php";
include "../inc/database.php";?>
<?php
global $connect;
$query = "SELECT * FROM `attendance` WHERE `attendance_class_act` = 'Monday'";
$array = array();
$array_get=  mysqli_query($connect,$query);
echo'<table class="rwd-table">
<th>Student Number</th>
                <th>Student Name</th>
              ';

while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $attendance_id=$row['attendanceid'];
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];
                         echo '
    <tr>
<td>'.$student_number.'</td>
<td>'.$student_name.'</td>
<td><form method="post" action="delete_student.php"><input type="checkbox" name='.$attendance_id.' </td>
<input type="hidden" name="attenid[]" value='.$attendance_id.'>
';

}



;
echo '</table><input type="submit" name="delete" value="delete"></tr></form>';


if(isset($_POST['delete'])){
  global $connect;
$query = "SELECT * FROM `attendance` WHERE `attendance_class_act` = 'Monday'";
$array = array();
$array_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $attendance_id=$row['attendanceid'];
    if (isset($_POST[''.$attendance_id.''])){
			$query2="DELETE FROM `attendance` where attendanceid =$attendance_id";
			$run_statuses = mysqli_query($connect, $query2);
                       echo "\n".$query2."\n";
                        echo "\nworking..\n";
}

}
}




?>
<?php
//include "../inc/footer.php";
?>
