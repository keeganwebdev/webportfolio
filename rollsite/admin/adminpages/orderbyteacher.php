<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";?>
<?php
session_start();
$orderinfo="SELECT distinct teacher FROM `attendance`";
$result=mysqli_query($connect,$orderinfo);
$array=array();

while($row=mysqli_fetch_assoc($result)){
  $teacher=$row['teacher'];

echo "</br><a href='../adminpages/teacherorder.php?teacher=$teacher'>$teacher</a>";

}

?>
