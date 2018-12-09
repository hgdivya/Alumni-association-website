<!DOCTYPE html>
<html>
<head>
<title>Add news</title>
<style>
body {
		   
	
			
			background-image: url("images/image17.jpg");
			
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

</style>
<script>
  function addRow(tableID) { 

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name="chkbox[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = "<textarea name='news[]' rows='4' cols='100' ></textarea>";


        }
 function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
        }catch(e) {
            alert(e);
        }
    }

</script>


</head>
<body>
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
history.go(1);};
</script>
<div class="frm1">
<INPUT type="button" value="Add Row" onClick="addRow('dataTable')" />

<INPUT type="button" value="Delete Row" name="delete" onClick="deleteRow('dataTable')" />
</div>
<form method="post" name="f" class="frm">  

<TABLE width="780" border="1">
<thead>
<tr>
<th width="20px"></th>
<th >News</th>

</tr>
</thead>
<tbody id="dataTable">

</tbody>
</TABLE>

<INPUT type="submit" value="Add news" name="submit" />
</form>
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

if(isset($_POST['submit']))
    {
     foreach ($_POST['news'] as $key => $value) 
        {
            $news = $_POST["news"][$key];
          

            $sql ="insert into newsad values ('','$news')";   
				
    $result1= mysqli_query($conn,$sql);
        }
   
if (mysqli_query($conn, $sql)) {
     echo "<script>alert(' news saved successfully!!!!');</script>";
	  header("refresh:0; url=addnews.php");
} else {
    echo "<script>alert('error saving news!!!');</script>";
      header("refresh:0; url=addnews.php");
}
    }   

mysqli_close($conn);
?>

<ul>
<li><a href="admin.html">HOME</a><br></li>
<li id="visible"><a href="news.html">NEWS PANEL</a><br>
<ul id="hidden">
	 <li><a href="addnews.php">Add news  </a><br></li>
	 <li><a href="deletenews.php">Delete news      </a><br></li>
	
	 </ul></li>
<li><a href="view.php">VIEW ALUMNI</a><br></li>
<li><a href="view_feedback.php">VIEW FEEDBACK</a><br></li>
<li><a href="adchpass.html">CHANGE PASSWORD</a><br></li>
<li><a href="alumni.html">LOGOUT</a></li>
</ul>
</body>
</html>