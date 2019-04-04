
<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/admincheck.php";
?>
<?php
global $connect;
$select_users= "SELECT  * FROM `user`";
$select_infosql=mysqli_query($connect,$select_users);
$array=array();
echo'<table class="rwd-table">
<th>Name</th>
                <th>Username</th>';
while($row = mysqli_fetch_assoc($select_infosql)){
    $array[]=$row;
    $username=$row['username'];
    $name=$row['name'];

                     echo '  <tr>
<td>'.$name.'</td>
<td>'.$username.'</td>
 <td><form method="post" action="../inc/edit_user.php?edituser='.$username.'"><button type="submit" name="edit" >Edit User Info</button></td></form>
 <td><form method="post" action="../inc/delete_user.php?deleteuser='.$username.'"><button type="submit" name="delete" >Delete User</button></td></form>'
;}
?>