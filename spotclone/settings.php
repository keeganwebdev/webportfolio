<?php
include("functions/includedfiles.php");
 ?>

 <div class="entityInfo">
<div class="centerSection">
  <div class="userInfo">
    <h1><?php echo $userLoggedIn->getFirstandLastName();?></h1>
</div>
 </div>
 <div class="buttonItems">
   <button class="button" onclick="openPage('userdetails.php')">USER DETAILS</button>
   <button class="button" onclick="logout()">LOGOUT</button>
</div>
 </div>
