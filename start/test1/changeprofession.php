<?php
session_start();
if(isset($_POST['radio1'])){
$dbnewprofession=$_POST['radio1'];
}
if(isset($_SESSION['currentusername'])){
$dbuname=$_SESSION['currentusername'];}
else{echo "Please Login to Edit ! "; exit();}
if(isset($_POST['submitprofession']))
{
  
  $conn = mysqli_connect('localhost','root','','dbw_web');
  $query ="update user1 set profession='".$dbnewprofession."' where user_uname='".$dbuname."'";
    $result=mysqli_query($conn,$query);
    if($result){header('Location:profilepage.php');}
 
}

?>
<html>

<head>
    
</head>
<body style="font-family: 'Comic Sans MS', cursive; background: rgba(19, 35, 47, 1.2);">
<form method="post" action="changeprofession.php"  style="margin-left:400px;margin-top:200px;color:white;font-size:26px;">
    Select Profession <br>
    <input type="radio" name="radio1" value="student"/> Student<br>
   <input type="radio" name="radio1" value="tutor"/> Tutor<br> 
    <input type="submit" name="submitprofession" style="margin-left:50px;margin-top:20px;border-radius:5px; height:30px; width:100px; size:5px; opacity:0.8;"/>
    
</form>    
    
</body>
</html>