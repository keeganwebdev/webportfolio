<?php
include  "../inc/header.php";
 include_once "../inc/database.php";
 include "../inc/admincheck.php";
 global $connect;
$query = "SELECT distinct`classname` FROM `classroom`";
$query2 = "SELECT distinct`classteacher` FROM `classroom`";
$array = array();
$teacher_get=mysqli_query($connect,$query2);
$class_get=  mysqli_query($connect,$query);
?>
<script>
function showHide(){
var checkbox = document.getElementById('chk');
if(checkbox.checked){
document.getElementById('classroom').style.display="block";
document.getElementById('classdrop').style.display="none";

}
else{
document.getElementById('classroom').style.display="none";
document.getElementById('classdrop').style.display="block";
}
}

</script>
<script>
    function func1() {
  document.getElementById('classroom').style.display="none";
}
window.onload=func1;
    </script>
<form method="post" action="insert_course.php">
  <label>Class Day</label>
  <input type="text" required name="classday">
  <label>Classroom</label>
  <select name="class_d" id="classdrop" >
                      <?php while($row = mysqli_fetch_assoc($class_get)){

                          ?>
                      }
                    <option name= "class_d"><?php echo $row['classname'];?></option>
                     <?php
                  }?>
                </select>
  <input type="text" required name="classroom" id="classroom">
</br>
  <input type="submit" name="insert">
</form>
 <label for="chk">New Info?</label> <input type="checkbox" name="chkbox" id="chk" onclick="showHide();"/>
<?php include "../inc/footer.php";?>
<?php if(isset($_POST['insert'])){
    if($_POST['classroom']){
$insert_info="  INSERT INTO `class_activity`(`activityid`, `activityclassroom`,`activitydate`) VALUES ('".$_POST['classday']."','".$_POST['classroom']."',NOW())";
$insert_sql=mysqli_query($connect,$insert_info);
echo $insert_info;
echo "<script>window.open('../adminpages/adminindex.php','_self')</script>";
}
 if($_POST['class_d']){
$insert_info="  INSERT INTO `class_activity`(`activityid`, `activityclassroom`,`activitydate`) VALUES ('".$_POST['classday']."','".$_POST['class_d']."',NOW())";
$insert_sql=mysqli_query($connect,$insert_info);
echo $insert_info;
echo "<script>window.open('../adminpages/adminindex.php','_self')</script>";
}
}?>
