<!DOCTYPE html>
<html>
<head>
<title>Delete news</title>
<style>
body {
		   
	
			
			background-image: url("images/image17.jpg");
			
			 width: 100%;
            
			background-repeat: repeat-y;
			background-size: cover;
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
top:100px;
left:450px;
width:500px;
height:250px;
font-family:Algerian;


}
table,th,td{
	 
	 color:black;
	 font-size:20px;
	 border: 1px solid black;
 }
</style>



</head>
<body>
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
history.go(1);};
</script>
<form action="admin.html">
<input type="submit"  name="" value="Back" style="font-family:Algerian;">

</form>
<div class="reg">
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

          

            $sql ="select * from newsad";   
				
    $result= mysqli_query($conn,$sql);

if($result->num_rows>0)
{
	
	echo "<table><tr><th>news_id</th><th>news</th></tr>";
	
	while($r=$result->fetch_assoc())
		
	{  
	    echo "<tr><td>".$r["id"]."</td><td>".$r["news"]."</td></tr>";
		
		
		
	}
	echo "</table>";
}

else{
echo "0 results";}
	echo "</table>";

   


mysqli_close($conn);
?>
</div>

</body>
</html>