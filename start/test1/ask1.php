<html>
<head>
<title>
Ask profession page
</title>
<link rel="stylesheet" type="text/css" href="ask.css"/>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
<div class="content">


<div class="body">
<div id="bodyheader"><form action="index.php">
<input id="input1" type="submit" name="proj_back_to_home" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px;float:right;" value="Home"></input></form></div>
<div id="bodycontent">
	<form method="POST" action="<?php
	session_start();
     if(isset($_POST['proj_ask_tutor']))
	 {
	 	$dbprofession=$_POST['proj_ask_tutor'];
		 //$location1 = $_POST['submit'];
	 	$conn = mysqli_connect('localhost' , 'root' , '' , 'dbw_web')
		or
		die('Error in connection ');
		if(isset($_SESSION['currentemail'])){
		$query = "ALTER table user1 SET profession ='".$dbprofession."') where user_emailid = '".$_SESSION['currentemail']."')"; }
		$result = mysqli_query($conn , $query);

		if($result){
		 header("Location:http://localhost/Project/start/test1/tutorprofile.php");        //METHOD 1
		}
		else
		{
			echo "Cant change Profession ! Please Refresh The Page !";
		}
		
	 	
	 }
	 else if(isset($_POST['proj_ask_student']))
	 {
		 //$location2 = $_POST['signup'];
		 header("Location:http://localhost/Project/start/test1/studentprofile.php");
		}
	 	
?>">
	    <br><br>
    	<center><font color="black" style="font-size:30px;	"><i><h2>May I know your profession </h2></i></font><?php
    	
    	if(isset($_SESSION['currentusername']))
    	{echo '<font color="black" style="font-size:30px;	"><i><h2>'.$_SESSION['currentusername'].'?</h2></i></font>';}
    	
    	

    	 ?>
    	
        <br><br>
        <input id="input1" type="submit" name="proj_ask_tutor" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px; opacity:0.9;" value="Tutor">
       &nbsp;&nbsp;&nbsp;
        <input id="input1" type="submit" name="proj_ask_student" style="border-top:5px solid blue; border-left:0px; width:150px;height:50px; background-color:grey;font-size:23px; opacity:0.9;" value="Student">
         

    </form>
    <?php
    /*session_destroy();
    	if(!isset($_SESSION['currentusername']))
    	{
    		header("Location:http://localhost/Project/start/test1/askforlogin.php");
    		}*/?>
</div>
<div id="bodyfooter">
</div>
</div>

</div>
</body>