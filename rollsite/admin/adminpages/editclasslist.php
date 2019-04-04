<?php

include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";
global $connect;
$getting_info="SELECT * FROM `class_activity`";
$array = array();
$array_get=  mysqli_query($connect,$getting_info);
echo '<h1>Hello </h1>
    <table class="rwd-table">
              <th>Day</th>
              <th>Classroom</th>
              <th>Date</th>';

while($row = mysqli_fetch_assoc($array_get)){

                        $day=$row['activityid'];
                        $room=$row['activityclassroom'];
                        $date=$row['activitydate'];
                         echo '
    <tr>
    <td>'.$day.'</td>
        <td>'.$room.'</td>
<td>'.$date.'</td>
     <td><form method="post" action="edit_class.php?editclass='.$day.'&room='.$room.'"><button type="submit" name="edit" >Edit Class Info</button></td></form>
     <td><form method="post" action="../inc/delete_class.php?deleteclass='.$room.'"><button type="submit" name="delete" >Delete Class</button></td></form>';

}
?>
