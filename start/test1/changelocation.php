<?php
session_start();
if(isset($_POST['editlocation'])){
$dbnewlocation=$_POST['editlocation'];
}
if(isset($_SESSION['currentusername'])){
$dbuname=$_SESSION['currentusername'];}
else{echo "Please Login to Edit ! "; exit();}
if(isset($_POST['submitlocation']))
{
  
  $conn = mysqli_connect('localhost','root','','dbw_web');
  $query ="update user1 set user_location='".$dbnewlocation."' where user_uname='".$dbuname."'";
    $result=mysqli_query($conn,$query);
    if($result){header('Location:profilepage.php');}
 
}

?>
<html>

<head>
    
</head>
<body style="background: rgba(19, 35, 47, 1.2);">
<form method="post" action="changelocation.php">
    
    <input type="text" name="editlocation" placeholder="Enter new address !"/>
   
    <input type="submit" name="submitlocation" style="margin-left:50px;margin-top:20px;border-radius:5px; height:30px; width:100px; size:5px; opacity:0.8;"/>
    
</form>    
    
</body>
</html>