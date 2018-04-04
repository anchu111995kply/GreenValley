<?php
include 'connection.php';
$c = date('Y-m-d');
$date=date_create($c);
date_add($date,date_interval_create_from_date_string("15 days"));
//echo date_format($date,"Y-m-d");
$exp=date_format($date,"Y-m-d");
//echo $exp;
//echo date_format($c,"Y-m-d");
//echo $da;
   // echo $currentDateTime;
if(isset($_POST["submit"]))
{

//$b=$_POST["date"];
$a=$_POST["noti"];

$sql="INSERT INTO `notification`(  `notification`, `date`,`expdate`) VALUES ('$a','$c','$exp')";
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
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
<font size=5 color="white"><b>WELCOME</b> <i>ADMIN</i></font>
 <li><a href="logout.php">Logout</a></li>
  
  
<li><a href="change password.php">Change Password</a></li>

 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="view.php"style="width:200px;"><a href="viewusers1.php">View Users</a></button></td></tr>


<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_tips.php"> View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
</table></td>
<td><table>
<tr> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td style="height:40px"><button style="width:200px;"><a href="adminview_noti.php">View Notifications</a></button></td>
<td style="height:40px"><button style="width:200px;"><a href="notification.php">Post Notifications</a></button></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td><form id="form2" name="not" method="post" action="#"><table>

<tr><td><td></td><td></td><td></td><td></td><td></td><td></td><td> Enter Notification</td><td><textarea name="noti" row="4"col="10" required>Enter notification</textarea></td></tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" value="Save" name="submit"/></td><td><a href="login.php"><input type="submit" value="Cancel" name="submit"/></a></td></tr>
</tr></table>
</td>
</tr>
</table>
</td>
</tr></table>
</body>
</html>