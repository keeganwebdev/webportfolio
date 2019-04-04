<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
?>
<form action="../inc/registerprocess.php" method="post">
  <label>Name</label>
  <input type="text" required name="name">
  <label>Username</label>
  <input type="text" required name="username">
<label>Password</label>
  <input type="password" required name="password">
</br>
<input type="submit" name="register" >
</form>
