<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";

$getting_info="SELECT * FROM `enrollment` join classroom on enrollment.classID=classroom.classid join class_activity on class_activity.activityclassroom=classroom.classname";
$result=mysqli_query($connect,$getting_info);
echo '<table class="rwd-table">
                <th>Student Name</th>
                <th>Class Day</th>
                <th>Classroom</th>
                <th>Location</th>'
                ;
while($row=mysqli_fetch_assoc($result)){
  $student=$row['studentID'];
  $class=$row['classID'];
  $Id=$row['enrollID'];
  $day=$row['activityid'];
  $classroom=$row['activityclassroom'];
  $location=$row['classlocation'];
  echo '<tr> 
  <td>'.$student.'</td>
  <td>'.$day.'</td>
  <td>'.$classroom.'</td>
  <td>'.$location.'</td>
      <td></td>
         <td> <form action="../inc/cancelenroll.php?cancel='.$Id.'" method="post">
          <button type="submit" name="delete" > Delete </button>
          </form></td>'
          
  ;
}
?>
