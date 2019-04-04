<?php
include "../inc/header.php";
include "../inc/database.php";
include "../inc/logincheck.php";
session_start();
$getting_info="SELECT * from classroom join user on user.name =classroom.classteacher  where user.userid='".$_SESSION['user']."'";
$result=mysqli_query($connect,$getting_info);
$query2 = "SELECT distinct`classname` FROM `classroom`";
$query3 = "SELECT distinct`activityid` FROM `class_activity`";
$day_get=mysqli_query($connect,$query3);
$class_get=  mysqli_query($connect,$query2);
$query = "SELECT distinct`classlocation` FROM `classroom`";
// set array
$array = array();
$location_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($result)){
    $name=$row['classteacher'];
}//
?>
<?php echo $name; ?>
<script>
   $(function() {
          $('#timepicker').timepicker();
            $('#timepicker2').timepicker();
      });
      </script>
      <script>
function showHide(){
var checkbox = document.getElementById('chk');
if(checkbox.checked){
document.getElementById('classroom').style.display="block";
document.getElementById('drop').style.display="none";
document.getElementById('day').style.display="block";
document.getElementById('classdrop').style.display="none";

}
else{
document.getElementById('drop').style.display="block";
document.getElementById('classroom').style.display="none";
document.getElementById('classdrop').style.display="block";
document.getElementById('day').style.display="none";
}
}

</script>
<script>
    function func1() {
  document.getElementById('classroom').style.display="none";
  document.getElementById('day').style.display="none";
}
window.onload=func1;
    </script>
<form method="post" action="declareactivity.php">
    <label> Classroom</label>
       <select name="class_d" id="classdrop">
                      <?php while($row = mysqli_fetch_assoc($class_get)){
                   ?>
                      }
                    <option name= "class_d" ><?php echo $row['classname'];?></option>
                     <?php
                  }
                  ?>
                </select>
    <input type="text"   id="classroom"  name="classroom">
    <label>Day</label>
    <select name="classdrop" id="drop">
                      <?php while($row = mysqli_fetch_assoc($day_get)){

                          ?>
                      }
                    <option  name= "classdrop" ><?php echo $row['activityid'];?></option>
                     <?php
                  }?>
                </select>
    <input type="text" id="day"  name="day">
    <label> Start Time</label>
    <input type="text"  id="timepicker"  name="start">
    <label> End Time</label>
    <input type="text"  id="timepicker2"  name="end">
    <label>Location</label>
                  <select name="location" >
                      <?php while($row = mysqli_fetch_assoc($location_get)){

                          ?>
                      }
                    <option name= "location"><?php echo $row['classlocation'];?></option>
                     <?php
                  }?>
                  </select>
    <input type="submit" name="insert" value="Insert">
</form>
         <label for="chk">New Info?</label> <input type="checkbox" name="chkbox" id="chk" onclick="showHide();"/>
    <?php
    if(isset($_POST['insert'])){
           if($_POST['class_d']||$_POST['classdrop']){
        $declare="INSERT INTO `classroom`( `classlocation`, `classname`, `class_start_time`, `class_end_time`, `classteacher`) VALUES ('".$_POST['location']."','".$_POST['class_d']."','".$_POST['start']."','".$_POST['end']."','$name')";
        $result=mysqli_query($connect,$declare);
    $act_insert="Insert into `class_activity`(`activityid`, `activityclassroom`, `activitydate`) VALUES ('".$_POST['classdrop']."','".$_POST['class_d']."',NOW())";
    $result2=mysqli_query($connect,$act_insert);
    $query = "SELECT * FROM `attendance` join user on user.name=attendance.teacher where user.userid='".$_SESSION['user']."'";
$array = array();
$array_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];

       $insert_roll="INSERT INTO `attendance`(`teacher`, `attendance_class_act`, `student_number`, `attendance_student`,  `attendancelocation`, `attendancestatues`,`attendancedatetime`) VALUES ('".$name."', '".$_POST['classdrop']."','".$student_number."','".$student_name."',  '".$_POST['location']."', 'absent',NOW())";
        $result3=mysqli_query($connect, $insert_roll);

    }
      echo  "<script>window.open('../pages/stuffpage.php','_self')</script>";
}




    if($_POST['classroom']||$_POST['day']){
        $declare="INSERT INTO `classroom`( `classlocation`, `classname`, `class_start_time`, `class_end_time`, `classteacher`) VALUES ('".$_POST['location']."','".$_POST['classroom']."','".$_POST['start']."','".$_POST['end']."','$name')";
        $result=mysqli_query($connect,$declare);
    $act_insert="Insert into `class_activity`(`activityid`, `activityclassroom`, `activitydate`) VALUES ('".$_POST['day']."','".$_POST['classroom']."',NOW())";
    $result2=mysqli_query($connect,$act_insert);
    $query = "SELECT * FROM `attendance` join user on user.name=attendance.teacher where user.userid='".$_SESSION['user']."'";
$array = array();
$array_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($array_get)){
                         $array[]=$row;
                         $student_number=$row['student_number'];
                         $student_name=$row['attendance_student'];

       $insert_roll="INSERT INTO `attendance`(`teacher`, `attendance_class_act`, `student_number`, `attendance_student`,  `attendancelocation`, `attendancestatues`,`attendancedatetime`) VALUES ('".$name."', '".$_POST['day']."','".$student_number."','".$student_name."',  '".$_POST['location']."', 'absent',NOW())";
        $result3=mysqli_query($connect, $insert_roll);

    }
      echo  "<script>window.open('../pages/stuffpage.php','_self')</script>";
}
    }
    ?>
