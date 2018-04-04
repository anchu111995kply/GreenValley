<?php
include 'connection.php';
if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }

$id=$_SESSION['Username'];
echo $id;
$result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['Fname'];
$lname=$row3['Lname'];

$phone=$row3['Phno'];

$hname=$row3['Housename'];
}
?>
//$city=$row3['cityid'];
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
<font size=5 color="red"><b>WELCOME</b> <i> </i></font>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>

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
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="available.php">Available Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> <a href="ftips.php">Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming Tips</a></button></td></tr>
</table></td>

</tr></table>

 
<form  action="#" onsubmit="return" name="myForm" id="myForm" method="post" enctype="multipart/form-data">
<table width="400"  align="center" cellpadding="10">
<caption><h2>My Profile</h2></caption>
</tr>
  <!--<tr>
    <td></td><td><img src="<?php echo $img ?>" style="border-radius: 50%;position:absolute;right:900px;" width="150px" height="150px" alt="no image found"/></td></tr>-->
    <tr<tr><td width="82" valign="top"><div align="left">Firstname:</div></td>
    <td width="165" valign="top"><input type="text" name="fname" id="fname" value='<?php echo $fname ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Lastname:</div></td>
    <td valign="top"><input type="text" name="lname" id="lname" value='<?php echo $lname ?> '></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Phone: </div></td>
    <td valign="top"><input type="text" name="phne" id="phne" value='<?php echo $phone ?> '></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">Housename: </div></td>
    <td valign="top"><input type="text" name="hname" id="hname" value='<?php echo $hname ?> '></td>
  </tr>
   
  
  <td><center><input type="submit" name="submit"  value="EditProfile"></center></td>
  </td></tr>
</table></form>

<?php
if(isset($_POST['submit']))
{

$f=$_POST["fname"];
$l=$_POST["lname"];

$p=$_POST["phne"];

$h=$_POST["hname"];

}

$res=mysqli_query($con,"UPDATE `register` SET `Fname`='$f',`Lname`='$l',`Phone`='$p',`Housename`='$h' WHERE `Username`='$id'");

?>  
</body>
</html>


