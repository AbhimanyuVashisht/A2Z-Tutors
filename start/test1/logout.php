<?php
 session_start();
 unset($_SESSION['currentemail']);
 unset($_SESSION['currentdob']);
 unset($_SESSION['currentlocation']);
 unset($_SESSION['currentprofession']);


   if(!isset($_SESSION['currentemail']))
   {
      // echo '<h1>You have successfully logged out !</h1>';
       echo '<script type="text/javascript">alert("You have Successfully Logged Out !! Kindly Close this Session !!");</script>';
       header("Location:http://localhost/Project/start/test1/index.php");
   }
   
   echo '<form action="index.php">
<input id="input1" type="submit" name="proj_back_to_home" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;" value="Home"></input></form>';

   session_destroy();
  ?>
