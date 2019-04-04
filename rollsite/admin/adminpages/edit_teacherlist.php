<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
$get_info="SELECT * FROM `classroom`";
$result=mysqli_query($connect,$get_info);
echo'<table class="rwd-table">
<th> Teacher</th>
<th>Class Location</th>
                <th>Class Room</th>
                <th> Start</th>
                <th>End</th>
                ';
while($row = mysqli_fetch_assoc($result)){
                 $teacher=$row['classteacher'];
               $location=$row['classlocation'];
               $classroom=$row['classname'] ;
                $start_time=$row['class_start_time'];
                $end_time=$row['class_end_time'];


                         echo '  <tr>
<td>'. $teacher.'</td>
<td>'.$location.'</td>
<td>'. $classroom.'</td>
<td>'. $start_time.'</td>
<td>'.$end_time.'</td>
 <td><form method="post" action="edit_teacher.php?editteacher='.$teacher.'&classroom='.$classroom.'"><button type="submit" name="edit" >Edit Teacher Info</button></td></form>
    <td><form method="post" action="../inc/delete_teacher.php?deleteteacher='.$teacher.'&classroom='.$classroom.'"><button type="submit" name="delete" >Delete Teacher </button></td></form>'
                                 ;
}
?>
