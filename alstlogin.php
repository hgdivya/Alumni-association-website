<?php
//connect to the server and select database

$con=mysqli_connect("127.0.0.1","root","","alumnidb");
if(!$con){
   echo "failed to connect";
}
if(!mysqli_select_db($con,'alumnidb'))
{   echo 'database not selected';
}

  //get values from form in login file
 $username = $_POST ['user_name'];
 $password = $_POST ['password'];
 
 



// query the database for the user
$sql = "SELECT * FROM alumni_login WHERE username='".$username."' AND passwd='".$password."' LIMIT 1";
$result= mysqli_query($con,$sql);

if($login=mysqli_fetch_assoc($result))
{

       echo "<script>alert('login successful!!!!');</script>";
       header( "refresh:0;url=alst.html" );
	   	 
}

else
 {
	   echo "<script>alert('incorrect password or username!!!!');</script>";
    header("refresh:0; url=alstlogin.html");
 }


	$con->close();

?>

