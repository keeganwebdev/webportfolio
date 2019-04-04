<?php
include  "../inc/header.php";
 include_once "../inc/database.php";
 include "../inc/admincheck.php";
?>
<script>
    $(function() {
          $('#timepicker').timepicker();
      });
    </script>
<script>
function showHide(){
var checkbox = document.getElementById('chk');
if(checkbox.checked){
document.getElementById('teacher_t').style.display="block";
document.getElementById('drop').style.display="none";
document.getElementById('code').style.display="block";
document.getElementById('roomdrop').style.display="none";

}
else{
    document.getElementById('roomdrop').style.display="block";
document.getElementById('drop').style.display="block";
document.getElementById('teacher_t').style.display="none";
document.getElementById('code').style.display="none";
}
}

</script>
<script>
    function func1() {
  document.getElementById('teacher_t').style.display="none";
  document.getElementById('code').style.display="none";
}
window.onload=func1;
    </script>
<?php
global $connect;
$query = "SELECT distinct`classlocation` FROM `classroom`";
$query2 = "SELECT distinct`classteacher` FROM `classroom`";
$query3 = "SELECT distinct`classname` FROM `classroom`";
// set array
$array = array();
$room_get=mysqli_query($connect,$query3);
$teacher_get=mysqli_query($connect,$query2);
$location_get=  mysqli_query($connect,$query);
?><form method="post" action="insert_teacher.php">

                <label>Teacher:</label>
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
                  <label>Class Room:</label>
                  <select name="classroom" id="roomdrop" >
                      <?php while($row = mysqli_fetch_assoc($room_get)){

                          ?>
                      }
                    <option name= "classroom"><?php echo $row['classname'];?></option>
                     <?php
                  }?>
                </select>
                  <input type="text"  id="code" required name="code">
                  <label>End Time:</label>
                  <input type="text" required name="time" id="timepicker">
                  <label>Location</label>
                  <select name="location" >
                      <?php while($row = mysqli_fetch_assoc($location_get)){

                          ?>
                      }
                    <option name= "location"><?php echo $row['classlocation'];?></option>
                     <?php
                  }?>
                  </select>
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
    if($_POST['teacher_d']){
  $insert_info="INSERT INTO `classroom`( `classlocation`, `classname`, `class_start_time`, `class_end_time`, `classteacher`) VALUES ('".$_POST['location']."','".$_POST['code']."',NOW(),'".$_POST['time']."','".$_POST['teacher_d']."')";
  $insert_sql=mysqli_query($connect,$insert_info);
  echo  "<script>window.open('../adminpages/adminindex.php','_self')</script>";
    }
    if($_POST['teacher_t']){
    $insert_info="INSERT INTO `classroom`( `classlocation`, `classname`, `class_start_time`, `class_end_time`, `classteacher`) VALUES ('".$_POST['location']."','".$_POST['classroom']."',NOW(),'".$_POST['time']."','".$_POST['teacher_t']."')";
  $insert_sql=mysqli_query($connect,$insert_info);
  echo  "<script>window.open('../adminpages/adminindex.php','_self')</script>";
        
    }
}
echo $insert_info ;
 ?>
