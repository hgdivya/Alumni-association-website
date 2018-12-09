<?php
$con=mysqli_connect ("127.0.0.1","root","","alumnidb");


if(!$con){
   echo "failed to connect:1";
   
}

if(!mysqli_select_db($con,'alumnidb'))
{   echo 'database 1 not selected';
}
if(preg_match("/([%\$#\*]+)/",$_POST ['First_name']))
	{
		
     	       echo "<script>alert('no special characters allowed!!!!');</script>";
			    header("refresh:0; url=regi.html");
			   
	}
	else{
		 $first_name = $_POST ['First_name'];
	}
	if(preg_match("/([%\$#\*]+)/",$_POST ['Last_name']))
	{
		
     	       echo "<script>alert('no special characters allowed!!!!');</script>";
			    header("refresh:0; url=regi.html");
			   
	}
	else{
		 $last_name = $_POST ['Last_name'];
	}

$dob=$_POST['dob'];
$gender=$_POST['gender'];

$address=$_POST['address'];

$email=$_POST['email'];
     
$city=$_POST['city'];
$contact=$_POST['contact'];


$user_name=$_POST['user_name'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];
$course=$_POST['course'];
$year_of_pass=$_POST['yop'];
$attach_pic=$_POST['acp'];

$designation=$_POST['designation'];
$organisation=$_POST['organisation'];


if($c_password != $password)
{
	echo "confirm password"."<br>"."<a href='register.html'>click here to retry</a>";
}
else{
	$sql = "INSERT INTO alumni (firstname,lastname,dob,gender,address,email,city,phno,username,course,yop,pic,design,organi)
VALUES ('$first_name','$last_name','$dob','$gender','$address','$email','$city','$contact','$user_name','$course','$year_of_pass','$attach_pic','$designation','$organisation')";

$result= mysqli_query($con,$sql);
	$sql1="INSERT INTO alumni_login (username,passwd) VALUES('$user_name','$password')";
	
	
    $result1= mysqli_query($con,$sql1);

}

if( $result )//&& $result1)
{
    
     	       echo "<script>alert(' registered successfully!!!!');</script>";
 header("refresh:0; url=register.html");
 }
 else {
	    echo "<script>alert('  error inserting!!!!');</script>";
   header("refresh:0; url=register.html");
 }




 mysqli_close($con);





?>