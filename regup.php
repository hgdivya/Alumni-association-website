<?php
$con=mysqli_connect ("127.0.0.1","root","","alumnidb");


if(!$con){
   echo "failed to connect:1";
   
}

if(!mysqli_select_db($con,'alumnidb'))
{   echo 'database 1 not selected';
}


$username=$_POST['username'];
$address=$_POST['address'];

$email=$_POST['email'];
     
$city=$_POST['city'];
$contact=$_POST['contact'];



$designation=$_POST['designation'];
$organisation=$_POST['organisation'];



	$sql = "UPDATE alumni SET address='".$address."',email='".$email."',city='".$city."',phno='".$contact."',design='".$designation."',organi='".$organisation."' WHERE username='".$username."'";

    $result= mysqli_query($con,$sql);
	
if (mysqli_query($con, $sql)) {
     echo "<script>alert(' updated successfully!!!!');</script>";
	  header("refresh:0; url=regup.html");
} else {
    echo "<script>alert('error updating!!!');</script>";
      header("refresh:0; url=regup.html");
}



 mysqli_close($con);





?>