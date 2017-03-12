
<html>

<head>
<title>Profile Page</title>
<link rel="stylesheet" type="text/css" href="css/profilepage.css"/>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
</head>
<body style="font-family: 'Comic Sans MS', cursive;">
<?php
    session_start();
    $conn=mysqli_connect('localhost','root','','dbw_web');
    if(isset($_SESSION['currentusername'])){
   $query="SELECT * from user1 where user_uname = '".$_SESSION['currentusername']."'";
			   $result=mysqli_query($conn,$query);
			   
			  if($result || mysqli_num_rows($result)){
			   
				 while($row = mysqli_fetch_assoc($result)) {
                       $dbfield=$row['user_field'];
			               $dbuname = $row['user_uname']; 
				           $dbnumber=$row['user_mobileno'];
                           $dbdob=$row['user_dob'];
                           $dbemail=$row['user_emailid'];
                           $dbprofession=$row['profession'];
                          $dblocation=$row['user_location'];
				          
			           }
				}
			  
			 
    }
    else{echo '<div style="width:59%; float:left;"><marquee behavior="alternate"><font size="15px" color="white" style="margin-top:50px;margin-left:100px;float:left;">Please Login To View Profile !</font></marquee></div><form action="register.html">
<input id="input1" type="submit" name="" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;margin-right: 400px;float:right;margin-top:50px;" value="Login"></input></form>
<script type="text/javascript">alert("You are not logged in !");</script>'; exit();}
?>
<div class="leftwrap">
	<?php

    	if(isset($_SESSION['currentusername']))
    	{echo '<font color="white" style="font-size:30px;	"><center><i><u><h3>'.$dbuname.'</h3></u></i></center></font>';}
    	
    	

    	 ?>
       <br><br>
    	 <form action="index.php" method="post">
<input id="input1" type="submit" name="proj_logout" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;" value="Logout!"></input></form>
<br><br><br>
       <form action="index.php">
<input id="input1" type="submit" name="proj_back_to_home" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;" value="Home"></input></form>

</div>
<div class="bodycontent">
     <div id=content1>
       <font color="black" style="font-size:30px;float:left;margin-right:10px;"><i><u><h4 style="line-height:0px;">Date Of Birth</h4></u></i></font>
	<?php  
        if(isset($_SESSION['currentdob']))
    	{echo '<font color="blue" style="font-size:30px;"><i><h5 style="line-height:0px;">'.$dbdob.'</h5></i></font>';}
    ?>
    
    </div><br>
    <div id=content1>
       <font color="black" style="font-size:30px;float:left; margin-right:10px;"><i><u><h4 style="line-height:0px;">Email</h4></u></i></font>
         <form action="changeemail.php"><input id="input1" type="submit"  name="edit" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;margin-top:10px;" value="Edit"/></form>
    <?php
        if(isset($_SESSION['currentemail']))
    	{echo '<font color="blue" style="font-size:30px;	"><i><h5 style="line-height:0px;">'.$dbemail.'</h5></i></font>';}
    ?>
        
    </div><br>
    <div id=content2>
       <font color="black" style="font-size:30px;"><i><h4 style="line-height:0px;float:left;margin-right:10px;"><u>Address</u></h4></i></font>
         <form action="changelocation.php"><input id="input1" type="submit"  name="edit" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;margin-top:10px;" value="Edit"></input></form>
       <?php
        if(isset($_SESSION['currentlocation']))
    	{echo '<font color="blue" style="font-size:30px;	"><i><h5 style="line-height:0px;">'.$dblocation.'</h5></i></font>';}

	  ?></div><br>
	  <div id=content1>
       <font color="black" style="font-size:30px;"><i><h4 style="line-height:0px;float:left;margin-right:10px;"><u>Profession</u></h4></i></font>
            <form action="changeprofession.php"><input id="input1" type="submit"  name="edit" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;margin-top:10px;" value="Edit"></input></form>
    <?php
        if(isset($_SESSION['currentprofession']))
    	{echo '<font color="blue" style="font-size:30px;	"><i><h5 style="line-height:0px;">'.$dbprofession.'</h5></i></font>';}
    ?></div>
       <div id=content1>
           <font color="black" style="font-size:30px;"><i><h4 style="line-height:0px;float:left;margin-right:10px;"><u>Field Of Interest/Work</u></h4></i></font>
             <form action="changefield.php"><input id="input1" type="submit"  name="edit" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;margin-right: 50px;margin-top:10px;" value="Edit"></input></form>
       <?php
        if(isset($_SESSION['currentfield']))
      {echo '<font color="blue" style="font-size:30px;  "><i><h5 style="line-height:0px;">'.$dbfield.'</h5></i></font>';}
    ?>
       </div>
</div>
</body>
</html>