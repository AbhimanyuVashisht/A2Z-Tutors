<?php
    session_start();
    $dbuname=$_POST['proj_username'];
    $dbpass=$_POST['proj_pass'];
    $dbemail=$_POST['proj_email'];
    $dblocation=$_POST['proj_location'];
    $dbnumber=$_POST['proj_number'];
    $dbdob=$_POST['proj_dob'];
    $dbgender=$_POST['proj_gender'];
    $dbprofession=$_POST['proj_profession'];
    $dbfield=$_POST['proj_field'];

    if($_POST['proj_submit'])
    {
    	if(!$dbuname)
    	{
    		$error.="<br>Please Enter Username  !";
    	}
    	 if(!$dbpass)
		{
			 $error.="<br>Please enter password !";
		}
        else // if password is entered
		   {
			   if(strlen($dbpass)<8)
			   {
				   $error.="<br> Password must be minimum 8 letters long !";
			   }
			   if(!preg_match('`[A-Z]`' , $dbpass))
			   {
				   $error.="<br>Password must contain an Uppercase letter !";
			   }
		   }

		if(!$dbemail)
    	{
    	$error.="<br>Please Enter Email !";	
    	}
    	//else( !filter_var($dbemail , FILTER_VALIDATE_EMAIL) )  // email validation 
		 //  $error.="<br>Please enter a valid Email !";
		   

    	if(!$dblocation)
    	{
    	$error.="<br>Please Enter Location !";	
    	}
    	if(!$dbnumber)
    	{
    	$error.="<br>Please Enter Contact Number  !";	
    	}
    	if(!$dbdob)
    	{
    	$error.="<br>Please Enter DOB !";	
    	}
    	if(!$dbgender)
    	{
    		$error.="<br>Please Specify Gender !";
    	}
    	if(!$dbprofession)
    	{
    		$error.="<br>Please Specify Profession !";
    	}
		if(!$dbfield)
        {
            $error.="<br>Please Select Field !";
        }

		if(isset($error)){  echo "There were errors : ".$error; }
		else
		{
			// signup step 1 ---> check if user email is already entered 
			 
			 $link = mysqli_connect('localhost' , 'root' , '' , 'dbw_web');
            $query = "SELECT * FROM user1  WHERE user_emailid ='".mysqli_real_escape_string($link , $dbemail)."'"; // removes sql injection 

           $result = mysqli_query($link , $query);
            //$result = mysqli_num_rows($result);

            if( mysqli_num_rows($result) == 1)
			 {
				 /*echo "<br>This email address is already registered !  Go for Login !";*/ // already registered so go for login 
				 header("Location:http://localhost/Project/start/test1/register.html");
				 exit();

			 }
			 else
			 {
			 	//now continue for signup process
			 	$query="INSERT into user1(user_sex,user_dob,user_location,user_emailid,user_pass,user_mobileno,user_uname,profession,user_field) VALUES('".$dbgender."','".$dbdob."','".$dblocation."','".$dbemail."','".$dbpass."','".$dbnumber."','".$dbuname."','".$dbprofession."','".$dbfield."')";
			 	mysqli_query($link , $query);
                 $_SESSION['currentusername']=$dbuname;
                 $_SESSION['currentdob']=$dbdob;
                 $_SESSION['currentlocation']=$dblocation;
                 $_SESSION['currentemail']=$dbemail;
                 $_SESSION['currentprofession']=$dbprofession;
                 $_SESSION['currentfield']=$dbfield;
                  //moving to the ask for profession page 
				 //header("Location:http://localhost/Project/start/test1/ask1.php");
				 //echo "<br>You have successfully signedup !!";
                  header("Location:http://localhost/Project/start/test1/profilepage.php");

				 mysqli_close($link);
                 

			 }

		}
    }

?>