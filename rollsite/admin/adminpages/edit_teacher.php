<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
 global $teacher;
if(isset($_POST['edit'])){
   $teacher= $_GET['editteacher'];


}

$query = "SELECT distinct`classlocation` FROM `classroom`";

$getting_info="SELECT * from classroom where classteacher='$teacher'";
$query2 = "SELECT distinct`classname` FROM `classroom`";
$class_get=  mysqli_query($connect,$query2);
$result=mysqli_query($connect,$getting_info);
$array = array();
$location_get=  mysqli_query($connect,$query);
while($row = mysqli_fetch_assoc($result)){
      $classroom=$row['classname'];
      $start=$row['class_start_time'];
      $end=$row['class_end_time'];

}
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
<script>
      $(function() {
          $('#timepicker').timepicker();
      });
      $(function() {
          $('#timepicker2').timepicker();
      });
      </script>
<form method="post" action="../inc/editteacherprocess.php?editteacher=<?php echo $teacher; ?>">
     <label>Teacher</label>
     <input type="text" name="teacher" required value=<?php echo $teacher; ?>>
     <label>Classroom<label>
     <select name="class_d" id="classdrop">
     <?php  if($_GET['classroom']==$room){
    echo '<option value='.$GET['room'].' selected>'.$_GET['room'].'</option>';
    
}
    ?>
                      <?php while($row = mysqli_fetch_assoc($class_get)){
                   ?>
                      }
                    <option name= "class_d" ><?php echo $row['classname'];?></option>
                     <?php
                  }
                  ?>
                </select>
       <input type="text" name="classroom" id="classroom" required value=<?php echo $classroom; ?>>
       <label>Class Start Time</label>
       <input type="text" name="start_time" id="timepicker" required value=<?php echo $start; ?>>
       <label>Class End Time</label>
       <input type="text" name="end_time" id="timepicker2" required value=<?php echo $end; ?>>
       <label>Location</label>
       <select name="location">
           
           <?php while($row = mysqli_fetch_assoc($location_get)){

               ?>
           }
         <option  name= "location" ><?php echo $row['classlocation'];?></option>
          <?php
       }?>
       </select>

     <input type="submit" name="update" value="update">

</form>
       <label for="chk">New Info?</label> <input type="checkbox" name="chkbox" id="chk" onclick="showHide();"/>

<?php echo $getting_info;?>
