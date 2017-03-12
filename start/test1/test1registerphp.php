<?php

	$dbemail = $_POST['proj_email'];
	$dbuname='';
    $dbpass=$_POST['proj_pass'];
    
    $dblocation='';
    $dbnumber='';
    $dbdob='';
    $dbgender='';
    $dbprofession='';
	
  
	/*if($username == "admin" && $password == "admin")
	{
		echo "Password Matched !";b
		}
	else
	{
		echo "Password Not Matched !";
		}*/
		$conn = mysqli_connect('localhost' , 'root' , '' , 'dbw_web')
		or
		die('Error in connection ');
		$query = "SELECT * FROM user1 WHERE user_emailid = '".$dbemail."'";
		$result = mysqli_query($conn , $query);
	 /* $result1 = mysqli_num_rows($result); // will return either number of same email or 0*/
			 
			 if(!$result || mysqli_num_rows($result) ==0)
			 {
				 echo "<br>This email address is not registered !  Go for Signup !";
				 exit();
             }
		while($row = mysqli_fetch_array($result))
		{
			$bpass = $row['user_pass']; // password of table
		}
		
		if($bpass == $dbpass)
		{
			/*echo "Successfully login !";*/
			session_start();
			$_SESSION['currentemail']=$dbemail;

			$query = "Select * from user1 where user_emailid = '".$dbemail."'";
		     $result = mysqli_query($conn , $query);

		     while($row = mysqli_fetch_assoc($result)) {
  
	           $dbdob = $row['user_dob']; 
	           $dblocation = $row['user_location'];
	           $dbprofession = $row['profession'];
	           $dbuname = $row['user_uname'];
	           $dbfield = $row['user_field'];


 


	           
   
           }
	
		         $_SESSION['currentusername']=$dbuname;
                 $_SESSION['currentdob']=$dbdob;
                 $_SESSION['currentlocation']=$dblocation;
                 /*$_SESSION['currentemail']=$dbemail;*/
                 $_SESSION['currentprofession']=$dbprofession;
                 $_SESSION['currentfield']=$dbfield;
			header("Location:http://localhost/Project/start/test1/profilepage.php");
		}
		else 
		{
			echo "Enter correct password !";
		}
	?>
	
	