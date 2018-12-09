<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<style>
body {
		   
	
			
			background-image: url("images/image19.jpg");
			
			 width: 100%;
            
			background-repeat: repeat-y;
			background-size: cover;
		}
		
ul {
             box-shadow: 10px 10px 15px rgba(179, 71, 0,0.6), 0 0 10px rgba(128, 51, 0,0.8);
    border-radius: 5px;
	font-size:17px;
    font-family:Algerian;
    list-style-type: none;
     font-weight:bold;
    
    overflow: hidden;
    position:absolute;
    
		}
		li {
              box-sizing: border-box;   
				
			}
			li a {
				  
				display: block;
				
				text-align: center;
				padding: 14px 30px;
				text-decoration: none;
			}
            a{
			        color:rgba(0,0,0,0.8);
			}
			
			li a:hover:not(.active) {
			  box-shadow: 10px 10px 10px rgba(179, 71, 0,0.4), 0 0 10px rgba(128, 51, 0,0.8);
				border-radius: 5px;

				 background-color:rgba(255, 179, 128,0.5);
			       color:rgba(0,0,0,0.6);
			}
			
			
			.frm
			{
			   position:absolute;
			  top:100px;
			  left:500px;
			}
			.frm1
			{
			   position:absolute;
			  top:50px;
			  left:500px;
			  
			}
			input[type="button"]
{box-shadow: 10px 10px 10px grey, 0 0 10px black;
   width:150px;
   height:35px;
background-color:rgba(255,255,255,0.5);
font-family:Algerian;
}
input[type="submit"]
{box-shadow: 10px 10px 10px grey, 0 0 10px black;
   width:150px;
   height:35px;
background-color:rgba(255,255,255,0.5);
font-family:Algerian;
}
	#hidden {
              display: none;
            }
            #visible:hover #hidden {
              display: block;
			  position: relative;
			  z-index: 1;
			 
            }
.reg{
padding:40px;
text-align:left;
position:absolute;
top:350px;
left:10px;
width:500px;
height:250px;
font-family:Algerian;


}
table,th,td{
	 
	 color:black;
	 font-size:17px;
	 border: 1px solid black;
 }
 input[type="submit"]
{box-shadow: 10px 10px 10px grey, 0 0 10px black;
   width:150px;
  
   height:35px;
background-color:rgba(255,255,255,0.5);
font-family:Algerian;
}
.abc{
position:absolute;
top:100px;

}

</style>

</head>
<body>
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
history.go(1);};
</script>
<form action="alst.html">
<input type="submit"  name="" value="Back" style="font-family:Algerian;">

</form>

<div class="abc">
<?php
$name=$_POST['name'];
$course=$_POST['course'];
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

    $sql ="select * from alumni where firstname='".$name."' and course='".$course."'";   
		
				
    $result= mysqli_query($conn,$sql);

if($result->num_rows>0)
{
	
	echo "<table><tr><th>firstname</th><th>lastname</th><th>dob</th><th>gender</th><th>address</th><th>email</th><th>city</th><th>phone no</th><th>username</th><th>course</th><th>year of passing</th><th>designation</th><th>organisation</th></tr>";
	
	while($r=$result->fetch_assoc())
		
	{  
	    echo "<tr><td>".$r["firstname"]."</td><td>".$r["lastname"]."</td><td>".$r["dob"]."</td><td>".$r["gender"]."</td><td>".$r["address"]."</td><td>".$r["email"]."</td><td>".$r["city"]."</td><td>".$r["phno"]."</td><td>".$r["username"]."</td><td>".$r["course"]."</td><td>".$r["yop"]."</td><td>".$r["design"]."</td><td>".$r["organi"]."</td></tr>";
		
	    
		
		
		
	}
	echo "</table>";
}

else{
echo "No results found";}
	echo "</table>";

 

mysqli_close($conn);
?>

</div>

</body>
</html>