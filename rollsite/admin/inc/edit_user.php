<?php
session_start();
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
$getting_info="SELECT * from user where username= '".$_GET['edituser']."'";
$account=$_GET['edituser'];
$result=mysqli_query($connect,$getting_info);
while($row=mysqli_fetch_assoc($result)){
  $name=$row['name'];
  $username=$row['username'];
  $password=$row['password'];
}

?>
<form method="post"  action="../inc/edituserprocess.php?account= <?php echo $account ?>">
<input type="hidden" name="accountname" value=<?php echo $account;?>>
<input type="text" name="name" required value=<?php echo $name;?>>
<input type="text" name="username" required value=<?php echo $username; ?>>
<input type="text" name="password" required value=<?php echo $password;?>>
<input type="submit" name="update" value="update">
</form>
<?php
//echo  "<script>window.open('../adminpages/editaccounts.php','_self')</script>";?>

