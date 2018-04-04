<?php
include 'connection.php';

   // echo $currentDateTime;
if(isset($_POST["submit"]))
{

//$b=$_POST["date"];
$a=$_POST["crop"];
//$b=$_POST["water"]
$sql="INSERT INTO `crop`(  `cropname`) VALUES ('$a')";
$result=mysqli_query($con,$sql);

}
?>
<?php
    
?>
<?php
    
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
	?>
<html>
<head>
<title>Green Valley</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:green;
}

li {
    float: right;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-size: 16px;
	height:50px;
}
</style>
</head>
<body>
<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(download4.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>


 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="view.php"style="width:200px;"><a href="viewusers.php">View Users</a></button></td></tr>
<tr><td><button style="width:200px;height=500px">Farming Tips</button></td></tr>
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;">Bank details</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Notifications</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> Post Farming Tips</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Registered Lands</button></td></tr>
</table></td>
<td><table><tr><td><form id="form2" name="not" method="post" action="#"><table>

<tr><td> Enter Crop Name</td><td><input type="text" name="crop" required></td></tr>


<tr><td><input type="submit" value="Save" name="submit"/></td><td><a href="login.php"><input type="submit" value="Cancel" name="submit"/></a></td></tr>
</tr></table>
</td>
</tr>
</table>
</td>
</tr></table>
</body>
</html>