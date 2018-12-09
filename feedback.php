<?php
$first_name=$_POST['First_name'];

$last_name=$_POST['Last_name'];
$address=$_POST['address'];
$email=$_POST['email'];
$feedback=$_POST['query'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnidb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  
$sql = "INSERT INTO  feedback(firstname,lastname,address,email,feedback)
VALUES ('$first_name','$last_name','$address','$email','$feedback')";

if (mysqli_query($conn, $sql)) {
     echo "<script>alert(' feedback given successfully!!!!');</script>";
	header( "refresh:0;url=feedback.html" );
} else {
    echo "<script>alert('error giving feedback!!!!');</script>";
	header( "refresh:0;url=feedback.html" );
}

mysqli_close($conn);
?>