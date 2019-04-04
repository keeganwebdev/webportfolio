<?php
include("config.php");

    $reminder=mysqli_query($con,"SELECT 'password' from users");
while ($row = $reminder->fetch_assoc()) {
  echo $row['password'];
}
?>
