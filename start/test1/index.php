<?php
if(isset($_POST['proj_logout'])){
 session_start();
 unset($_SESSION['currentemail']);
 unset($_SESSION['currentdob']);
 unset($_SESSION['currentlocation']);
 unset($_SESSION['currentprofession']);


   if(!isset($_SESSION['currentemail']))
   {
      // echo '<h1>You have successfully logged out !</h1>';
       echo '<script type="text/javascript">alert("You have Successfully Logged Out !! Kindly Close this Session !!");</script>';
       
   }
   
   
   session_destroy();}
  ?>

<html>
<head>
<title>
Home Page

</title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script type="text/javascript">
      window.onload = function(){ alert("Welcome to our DBMS-Project!");}
</script>
<script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
<style>
ul {

	width: 100%;
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #333333;
    padding-left: 240px;
}

li {
	width: 10%;
    float: left;
    padding-left: 100px;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
</style>
</head>
<body style="font-family: 'Comic Sans MS', cursive;">

			 <?php
			  /*CONNECTION TO DATABASE*/
			  $conn=mysqli_connect('localhost','root','','dbw_web')
			   or
			   die('Error in connection !');				
			?>
  
    <div id="bodyheader"><marquee behavior="alternate" scrollamount="3" direction="up"><font color="white" style="font-size:30px;font-family: 'Comic Sans MS', cursive; "><i><h1>AtoZ-Tutor</h1></i></font></marquee></div>
<div class="bodycontent">
<ul >
    <li ><a href="register.html" target="_blank" >Login</a></li>
    <li><a href="login.html" target="_blank">Register</a></li>
    <li><a href="profilepage.php" target="_blank">Profile</a></li>
 
</ul>
<div class="outerbox">
<!---<div id="leftwrapper"></div>-->
   <!-- <div id="outerboxcontent">
   <!----begin------Insert to your webpage where you want to display the slider-->
<div id="hislider1" style=" max-width:1649px;max-height:499px;height:100%;width:100%; margin:0px;"></div>
 <!----end------Insert to your webpage where you want to display the slider-->

    <!--</div>
<!---<div id="rightwrapper"></div>-->
</div>
<div style="height:15px; background-color:rgba(19, 35, 47, 1.2); width:100%;"></div>
    
<div class="tutorslist">
	<div id="transbox">
	<p>
	<?php
            //DISPLAY TUTORS LIST 
          
			   $query="SELECT * from user1 where profession = 'tutor'";
			   $result=mysqli_query($conn,$query);
			   
			  if($result || mysqli_num_rows($result)){
			   echo '<font color="black" style="font-size:30px;text-align:center;"><i><h1><u>Registered Tutors</u></h1></i></font>';
				/*$i=0;
			    $num=mysqli_num_rows($result);
				while ($i < $num) {
				$dbuname=mysqli_result($result,$i,"user_uname");

				echo '<b>'.$dbuname.'</b>';
				$i++;
				 }*/
				 while($row = mysqli_fetch_assoc($result)) {
                       $dbfield=$row['user_field'];
			               $dbuname = $row['user_uname']; 
				           $dbnumber=$row['user_mobileno'];
                           
				           echo '<b>'.$dbuname.'</b>';
				          echo '<input onclick="this.value='.$dbnumber.'" type="button" value="View Number" id="myButton1" style="margin-left:20px; border:3px solid blue; border-radius:5px; background-color:#aaced1; margin-right:10px;"/>';
                          echo $dbfield;
				           echo '<br><br>';
			           }
				}
			  
			  echo '<br><br>';
        
        /*$query1 ="delimiter /";
        $result1=mysqli_query($conn,$query1);
        if(!$result1){echo "1";}
        $query2 ="create procedure disptutorlist()";
        $result2=mysqli_query($conn,$query2);
         if(!$result2){echo "2";}
         $query3 ="begin";
        $result3=mysqli_query($conn,$query3);     
         if(!$result3){echo "3";}
        $query4 ="select * from user1;";
        $result4=mysqli_query($conn,$query4); 
         if(!$result4){echo "4";}
        $query5 ="end /";
        $result5=mysqli_query($conn,$query5);  
         if(!$result5){echo "5";}
       /* $query6 ="/";
        $result6=mysqli_query($conn,$query6); 
         if(!$result1){echo "6";}*/
        /*$query7 ="call disptutorlist()/";
        $result7=mysqli_query($conn,$query7); 
         if(!$result7){echo "7";}
          */
        //$query="call disptutor1()";
        
       /* $result=mysqli_query($conn,$query);
       if(!$result){echo "not executed";}
         
			   
        if( $result || mysqli_num_rows($result)){
			   echo '<font color="black" style="font-size:30px;text-align:center;"><i><h1><u>Registered Tutors</u></h1></i></font>';
				/*$i=0;
			    $num=mysqli_num_rows($result);
				while ($i < $num) {
				$dbuname=mysqli_result($result,$i,"user_uname");

				echo '<b>'.$dbuname.'</b>';
				$i++;
				 }*/
        /*while($row = mysqli_fetch_array($result)) {
			               $dbuname = $row['user_uname']; 
				           $dbnumber=$row['user_mobileno'];
				           echo '<b>'.$dbuname.'</b>';
				          echo '<input onclick="this.value='.$dbnumber.'" type="button" value="Get Number" id="myButton1" style="margin-left:20px; border:3px solid blue; border-radius:5px; background-color:#aaced1;"/>';
				           echo '<br><br>';
			           }
        }*/
	?>
	</p>
	</div>
</div>

    <div class="studentslist">
     <div id="transbox">
      <p>

          <?php
	           /* DISPLAY STUDENTS LIST */
		        $query1="SELECT * from user1 where profession = 'student'";
			   $result1=mysqli_query($conn,$query1);
          if(!$result1){echo "not executed";}
			   
			  if($result1 || mysqli_num_rows($result1)){
			   echo '<font color="black" style="font-size:30px;text-align:center;"><i><h1><u>Students Enrolled</u></h1></i></font>';
				/*$i=0;
			    $num=mysqli_num_rows($result);
				while ($i < $num) {
				$dbuname=mysqli_result($result,$i,"user_uname");

				echo '<b>'.$dbuname.'</b>';
				$i++;
				 }*/

				 while($row = mysqli_fetch_assoc($result1)) 
					 {
				  
				           $dbuname = $row['user_uname']; 
				           $dbnumber=$row['user_mobileno'];
                           $dbfield=$row['user_field'];
                        
				           echo '<b>'.$dbuname.'</b>';
				          echo '<input onclick="this.value='.$dbnumber.'" type="button" value="View Number" id="myButton1" style="margin-left:20px; border:3px solid blue; border-radius:5px; background-color:#aaced1; margin-right:10px;"/>';
                         /*echo '<input onclick="document.getElementById("demo").innerHTML='.$dbfield.'" type="button" value="VIEW FIELD" id="myButton1" style="margin-left:20px; border:3px solid blue; border-radius:5px; background-color:#aaced1; padding-left:5px;"/>
                          <br><p id="demo">hello</p>';*/
                       echo $dbfield;
				          echo '<br><br>';
				   
				     }
				}

				/*END OF DISPLAY STUDENTS LIST*/
		?>
		</p>
		</div>
    </div>
</div>
<div id="footer" style="background-color: rgba(19, 35, 47, 1.2); width:100%;padding-left: 40px;">
	<p><font color="white" style="font-size:30px;text-align:center;"><i><h3><u>Database Systems And Web Project</u></h3></i></font></p>
    <marquee behavior="alternate" direction="up" scrollamount="2">
    <p><font color="white" style="font-size:25px;text-align:left;"><i><h4><u>Submitted By :</u></h4></i></font></p>
	<p><font color="white" style="font-size:18px;text-align:left;"><i><h5>Rahul Sharma </h5></i></font></p>
    <p><font color="white" style="font-size:18px;text-align:left;"><i><h5>Sharad Dadhich</h5></i></font></p>
	<p><font color="white" style="font-size:18px;text-align:left;"><i><h5>Abhimanyu Vashisht</h5></i></font></p>
	<p><font color="white" style="font-size:18px;text-align:left;"><i><h5>Vasu Arora</h5></i></font></p>
	</marquee>
</div>


</body>
</html>