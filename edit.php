<?php
include 'connection.php';
$id=$_SESSION['Username'];
//echo $Fname;
if(isset($_POST['submit']))
{

$name=$_POST["fname"];
$lnam=$_POST["lastname"];
$pno=$_POST["phno"];
$hnam=$_POST["hname"];
$res="UPDATE `register` SET `Fname`='$name',`Lname`='$lnam',`Housename`=$hnam,".",".",".",".",`Phno`='$pno'WHERE `Username`={$_SESSION['Username']};";
$re=mysqli_query($con,$res);
echo "$res";
}
?>
<?php
$result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];
$Lname=$row3['Lname'];
$Housename=$row3['Housename'];

$State=$row3['State'];
$Phno=$row3['Phno'];
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
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 <font size=5 color="red"><b>WELCOME</b> <i> <?php echo $Fname ?></i></font>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>

<li><a href="change.php">Change Password</a>
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
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="available.php">Available Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> Post Farming Tips</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Contact Us</button></td></tr>
</table></td>
<td> </td> <td></td>
<td>
<table width="400"  align="center" cellpadding="0">

<caption><b>Profile Information</b></caption>
<form name="f1" id="f1" method="POST" action="#" onsubmit="return" enctype="multipart/form-data">
<tr>

</tr>

  
    <tr><td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><input type="text" name="fname" value='<?php echo $Fname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><input type="text" name="lastname" value='<?php echo $Lname ?> '></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Housename:</div></td>
    <td valign="top"><input type="text" name="hname" value='<?php echo $Housename ?> '></td>
  </tr>
 
  <tr>
    <td valign="top"><div align="left">Phno: </div></td>
    <td valign="top"><input type="text" name="phno" value='<?php echo $Phno ?> '></td>
  </tr>
  <tr><td><input type="submit" value="submit" name="submit"/></td><td><input type="submit" value="Cancel" name="Cancel"/></td></tr>
  </td></tr>
  </form>
</table></td></table>
</body>
</html>



