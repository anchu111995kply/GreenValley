
<?php
    include 'connection.php';
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }


$id=$_SESSION['Username'];
//echo $Fname;
$result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];
$Photo=$row3['Photo'];
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
img {
	border-radius:50%;
    }
.footer{
	position:absolute;
	top:800px;
	width:100%;
	color:white;
	background-color:green;
	height:120px;
}
</style>
</head>
<body>


<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
<font size=5 color="red"><b>WELCOME</b> <i> <?php echo $Fname ?></i></font>
<img src="<?php echo $Photo ?>" width="50" height="40" alt="no image found"/>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="viewmsg.php">Messages</a></li>
 <li><a href="feedback.php">Feed Back</a></li>

<li><a href="changepass.php">Change Password</a>
 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="view.php"style="width:200px;"><a href="view.php">View Profile</a></button></td></tr>
<tr><td><button style="width:200px;height=500px"><a href="registerland.php">Register Lands</a></button></td></tr>
<tr><td><button style="width:200px;height=500px"><a href="sellland.php">Sell ur Lands</a></button></td></tr>
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="available.php">Available Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> <a href="ftips.php">Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="blocklands.php">Blocked Details</a></button></td></tr>
</table></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td><table border="2" style=" background-color:#99cc00;border-color:red">
<caption><b><font size="5">These lands are blocked by admin</font></b></caption>
<tr>
<td><b>State</b></td>

<td><b>District</b></td>
<td><b>Village</b></td>
<td><b>Area</b></td>
<td><b>Amount/Year</b></td>
<td><b>No of Years</b></td>
</tr>

<?php
$result1 ="SELECT * FROM landregister where status='1' and Username='$id'";
$result6=mysqli_query($con,$result1);
    while($row2=mysqli_fetch_array($result6))
    {
		$v=$row2['State'];
		$d= $row2['District'];
		$t= $row2['Village'];
		$b= $row2['Area'];
		$s=$row2['Apyear'];
		$x=$row2['Noyear'];
	
?>

<tr><td><?php echo $v; ?></td>
          <td><?php echo $d; ?></td>
		  <td><?php echo $t; ?></td>
		  <td><?php echo $b; ?></td>
		  <td><?php echo $s; ?></td>
		  <td><?php echo $x; ?></td>
		  
		  </tr>
		<?php
	}
?>	
</tr></table>