<?php

include "../inc/header.php";
include "../inc/database.php";
include "../inc/logincheck.php";
global $connect;
$getting_info="SELECT * FROM `classroom` join user on user.name=classroom.classteacher where user.userid='".$_SESSION['user']."'";
$array = array();
$array_get=  mysqli_query($connect,$getting_info);
include "../inc/sidebar.php";
echo '<h1>Hello '.$_SESSION['login'].'</h1>
    <table class="rwd-table">
              <th>Location</th>
              <th>Classroom</th>
              <th>Start</th>
              <th>End</th>';
while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                        $classroom=$row['classname'];
      $start=$row['class_start_time'];
      $end=$row['class_end_time'];
$location=$row['classlocation'];
                         echo '
    <tr>
<td>'.$location.'</td>
<td>'.$classroom.'</td>
    <td>'.$start.'</td>
        <td>'.$end.'</td>

';
}
?>