<?php
session_start();
if(isset($_POST['editemail'])){
$dbnewemail=$_POST['editemail'];
}
if(isset($_SESSION['currentusername'])){
$dbuname=$_SESSION['currentusername'];}
else{echo "Please Login to Edit ! "; exit();}

if(isset($_POST['submitemail']))
{
  
  $conn = mysqli_connect('localhost','root','','dbw_web');
  $query ="update user1 set user_emailid='".$dbnewemail."' where user_uname='".$dbuname."'";
    $result=mysqli_query($conn,$query);
    if($result){header('Location:profilepage.php');}
 
}

?>
<html>

<head>
    
</head>
<body style="background: rgba(19, 35, 47, 1.2);">
<form method="post" action="changeemail.php" style="margin-left:400px;margin-top:200px;">
    
    <input type="email" name="editemail" placeholder="Enter new email !"/>
   
    <input type="submit" name="submitemail" style="margin-left:50px;margin-top:20px;border-radius:5px; height:30px; width:100px; size:5px; opacity:0.8;"/>
    
</form>    
    
</body>
</html>