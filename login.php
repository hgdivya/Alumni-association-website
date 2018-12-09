<?php
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
echo "Connected successfully";

$sql ="SELECT * FROM REGISTER WHERE Name='$_POST[user_name]' and Password='$_POST[password]'";



$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>FIRST NAME</td>";
echo "<td>MIDDLE NAME</td>";
echo "<td>LAST NAME</td>";
echo "<td>DOB</td>";
echo "<td>GENDER</td>";
echo "<td>ADDRESS</td>";
echo "<td>EMAIL</td>";
echo "<td>CITY</td>";
echo "<td>CONTACT</td>";
echo "<td>COURSE</td>";
echo "<td>YEAR OF PASSING</td>";
echo "<td>DESIGNATION</td>";
echo "<td>ORGANISATION</td>";
echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["first_name"]."</td>"."<td>".$r["middle_name"]."</td>"."<td>".$r["last_name"]."</td>"."<td>".$r["DOB"]."</td>"."<td>".$r["Gender"]."</td>"."<td>".$r["Address"]."</td>"."<td>".$r["Email"]."</td>"."<td>".$r["City"]."</td>"."<td>".$r["Contact"]."</td>"."<td>".$r["Course"]."</td>"."<td>".$r["YOP"]."</td>"."<td>".$r["Designation"]."</td>"."<td>".$r["Organisation"]."</td>".;
    echo "</tr>";
	}
	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>