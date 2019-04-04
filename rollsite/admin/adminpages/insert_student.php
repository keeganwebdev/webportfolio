<?php
include  "../inc/header.php";
 include_once "../inc/database.php";
 include "../inc/admincheck.php";
?>
<script>
function showHide(){
var checkbox = document.getElementById('chk');
if(checkbox.checked){
document.getElementById('teacher_t').style.display="block";
document.getElementById('drop').style.display="none";
document.getElementById('class_day').style.display="block";
document.getElementById('classdrop').style.display="none";

}
else{
document.getElementById('drop').style.display="block";
document.getElementById('teacher_t').style.display="none";
document.getElementById('classdrop').style.display="block";
document.getElementById('class_day').style.display="none";
}
}

</script>
<script>
    function func1() {
  document.getElementById('teacher_t').style.display="none";
  document.getElementById('class_day').style.display="none";
}
window.onload=func1;
    </script>

<?php
global $connect;


$query = "SELECT distinct`classlocation` FROM `classroom`";
$query2 = "SELECT distinct`classteacher` FROM `classroom`";
$query3 = "SELECT distinct`activityid` FROM `class_activity`";

// set array
$array = array();
$location_get=  mysqli_query($connect,$query);
$teacher_get=mysqli_query($connect,$query2);
$day_get=mysqli_query($connect,$query3);
?><form method="post" action="insert_student.php">
                  <label>Student Number:</label>
                  <input type="text" required name="student_number">
                  <label>Student:</label>
                  <input type="text" required  name="student">
                  <label>Class Day</label>
                  <select name="classdrop" id="classdrop">
                      <?php while($row = mysqli_fetch_assoc($day_get)){
                         
                          ?>
                      }
                    <option  name= "classdrop" ><?php echo $row['activityid'];?></option>
                     <?php
                  }?>
                  </select>
                  <input type="text" name="class_day" id="class_day">
                  <label>Location</label>
                  <select name="location">
                      <?php while($row = mysqli_fetch_assoc($location_get)){
                         
                          ?>
                      }
                    <option  name= "location" ><?php echo $row['classlocation'];?></option>
                     <?php
                  }?>
                  </select>
                  <label>Teacher</label>
                  <select name="teacher_d" id="drop" >
                      <?php while($row = mysqli_fetch_assoc($teacher_get)){

                          ?>
                      }
                    <option name= "teacher_d"><?php echo $row['classteacher'];?></option>
                     <?php
                  }?>
                </select>
                <input type="text" name="teacher_t"  id= "teacher_t" />
                </br>
<input type="submit" name="insert" value="Insert">
                </form>
     <label for="chk">New Info?</label> <input type="checkbox" name="chkbox" id="chk" onclick="showHide();"/>

                <?php
include "../inc/footer.php";
?>

// insert statement
<?php
global $connect;
if(isset($_POST['insert'])){
    if($_POST['classdrop']||$_POST['teacher_d']){
  $insert_info="INSERT INTO `attendance`( `teacher`, `attendance_class_act`, `student_number`, `attendance_student`, `attendancedatetime`, `attendancelocation`, `attendancestatues`) VALUES ('".$_POST['teacher_d']."','".$_POST['classdrop']."','".$_POST['student_number']."','".$_POST['student']."',NOW(),'".$_POST['location']."','Absent');";
  $insert_sql=mysqli_query($connect,$insert_info);
   echo  "<script>window.open('../adminpages/adminindex.php','_self')</script>";
  echo $insert_info ;
}
    if($_POST['class_day']||$_POST['teacher_t']){
  $insert_info="INSERT INTO `attendance`( `teacher`, `attendance_class_act`, `student_number`, `attendance_student`, `attendancedatetime`, `attendancelocation`, `attendancestatues`) VALUES ('".$_POST['teacher_t']."','".$_POST['class_day']."','".$_POST['student_number']."','".$_POST['student']."',NOW(),'".$_POST['location']."','Absent');";
  $insert_sql=mysqli_query($connect,$insert_info);
   echo  "<script>window.open('../adminpages/adminindex.php','_self')</script>";
  echo $insert_info ;
}
}
  
 
 ?>
