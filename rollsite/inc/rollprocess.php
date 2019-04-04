<?php
include "../inc/database.php";
if(isset($_POST['submit'])){
       foreach($_POST['status'] as $status){
         echo $status;
       }
       foreach($_POST['attenid'] as $attenid){
           echo $attenid;
       }
   }
   
?>