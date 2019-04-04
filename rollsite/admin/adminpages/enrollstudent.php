<?php
include "../inc/database.php";
include "../inc/header.php";
include "../inc/admincheck.php";
$query = "SELECT distinct * FROM `classroom` join class_activity on classroom.classname=class_activity.activityclassroom";
$array = array();
$id_get=  mysqli_query($connect,$query);
?>

<form method="post" action="enrollstudent.php"
      <label>Student Name</label>
    </br>
     <input type="text" required name="student">
     </br>
                  <label>Class Day</label>
                   <select name="class_day">
                      <?php while($row = mysqli_fetch_assoc($id_get)){
                         
                          ?>
                      }
                    <option  name= "class_day" value="<?php echo $row['classid'];?>" ><?php echo $row['activityid'];?></option>
                     <?php
                  }?>
                  </select>
                  </br>
                  <input type="submit" name="enroll">
                  
                 <?php global $connect;
                 if(isset($_POST['enroll'])){
                     
                        $enroll_class="INSERT INTO `enrollment`(`studentID`, `classid`) VALUES ('".$_POST['student']."','".$_POST['class_day']."')";
                 $enrollresult=mysqli_query($connect,$enroll_class);
              
                 }
                 
                 
   
   ?>

                 
                     
                 