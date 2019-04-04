<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
if(isset($_POST['edit'])){
  $day=$_GET['editclass'];

}
$query = "SELECT distinct`classname` FROM `classroom`";
$class_get=  mysqli_query($connect,$query);
$getting_info="SELECT * FROM `class_activity` where activityid='".$day."'";
$result=mysqli_query($connect,$getting_info);
while($row = mysqli_fetch_assoc($result)){
                        $room=$row['activityclassroom'];
                        $date=$row['activitydate'];

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
            $( "#datepicker" ).datepicker();
         });
  </script>
<form method="post" action="../inc/editclassprocess.php?editclass=<?php echo $day ?>">
       <label>Class Room</label>
  <input type="text"  required name="classroom" id="classroom" value="<?php echo $room?>">
   <select name="class_d" id="classdrop">
     <?php  if($_GET['room']==$room){
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
    <label>Date</label>
  <input type="text"  required name="date"  id="datepicker" value=<?php echo $date;?>>
  <input type="submit" name="update">
</form>
  <label for="chk">New Info?</label> <input type="checkbox" name="chkbox" id="chk" onclick="showHide();"/>
