<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
 global $student_number;
if(isset($_POST['edit'])){
   $student_number= $_GET['editstudent'];


}

$query = "SELECT distinct`classlocation` FROM `classroom`";
$query2 = "SELECT distinct`classteacher` FROM `classroom`";
$query3 = "SELECT distinct`activityid` FROM `class_activity`";
$teacher_get=mysqli_query($connect,$query2);
$day_get=mysqli_query($connect,$query3);
$getting_info="SELECT  * from attendance where `student_number`=".$student_number;

$result=mysqli_query($connect,$getting_info);
$array = array();
$location_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($result)){
      $student_name=$row['attendance_student'];
      $teacher=$row['teacher'];
      $day=$row['attendance_class_act'];

}
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

<form method="post" action="../inc/editstudentprocess.php?editstudent=<?php echo $student_number?>">
                  <label>Student Number:</label>
                  <input type="text" required name="student_number" value=<?php  echo $student_number ;?> >
                  <label>Student:</label>
                  <input type="text"  required name="student" value=<?php echo $student_name ;?>
                         </br>
                         <label> Day of Class </label>
                               <select name="classdrop" id="classdrop">
                                 <?php  if($_GET['day']==$day){
                                     echo '<option value='.$GET['day'].' selected>'.$_GET['day'].'</option>';
                                 }
?>
                      <?php while($row = mysqli_fetch_assoc($day_get)){
                         
                          ?>
                      }
                    <option  name= "classdrop" ><?php echo $row['activityid'];?></option>
                     <?php
                  }?>
                  </select>
                  <input type="text" required name="class_day" id="class_day" value=<?php echo $day;?> >
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
                       <?php if($_GET['teacher']==$teacher){
                           echo '<option value='.$GET['teacher'].' selected>'.$_GET['teacher'].'</option>';
                       }
?>
                      <?php while($row = mysqli_fetch_assoc($teacher_get)){

                          ?>
                      }
                    <option name= "teacher_d"><?php echo $row['classteacher'];?></option>
                     <?php
                  }?>
                </select>
                  <input type="text" required name="teacher" id="teacher_t" value=<?php echo $teacher; ?>>
                </br>
<input type="submit" name="update" value="update">

                </form>
<label for="chk">New Info?</label> <input type="checkbox" name="chkbox" id="chk" onclick="showHide();"/>