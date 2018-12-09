<?php
$user_name=$_POST['user_name'];
$current_password=$_POST['cpassword'];
$new_password=$_POST['npassword'];
$confirm_password=$_POST['rpassword'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Alumnidb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($new_password==$confirm_password)
{
$sql ="SELECT * FROM  admin_login WHERE username='".$user_name."' AND passwd='".$current_password."'";
$result=mysqli_query($conn, $sql);

if($login=mysqli_fetch_assoc($result))
{
	$sql1= "UPDATE admin_login SET passwd='".$new_password."' WHERE username='".$user_name."' and Passwd='".$current_password."'";
	$result1=mysqli_query($conn, $sql1);
}
else
{	
	echo "wrong password";
}
}
if (mysqli_query($conn, $sql)) {
     echo "<script>alert(' password saved successfully!!!!');</script>";
	  header("refresh:0; url=adchpass.html");
} else {
    echo "<script>alert('error saving password!!!');</script>";
      header("refresh:0; url=adchpass.html");
}
mysqli_close($conn);
?>