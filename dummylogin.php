<?php
include 'connection.php'; //database connection page

if(isset($_POST['submit']))
{
	$username=$_POST['u1'];   //username value from the form
	$password=$_POST['p1'];	//password value from the form
	//echo $username;
	$sql="select * from login where Username='$username' and Password='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
	//echo $res;
	
	if($fetch=mysqli_fetch_array($res))
	{
	if($fetch['roleid']==1) // role means user , for admin set to 0 and for user set to  
	{
		
		$_SESSION["Username"]=$username;
       echo $_SESSION["Username"];	// setting username as session variable 
	header("location:userhome.php");	//home page or the dashboard page to be redirected
	}
	else if($fetch['roleid']==2) // role means admin, for admin set to 0 and for user set to  
		{
		$_SESSION["Username"]=$username;	// setting username as session variable 
		$_SESSION["userid"]=$fetch['userid'];
	    header("location:adminhome.php");
	}
	}
else {
	echo  "<script>alert('incorrect username or password')</script>" ;
}
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
 
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>

<li><a href="mnu.php">Menu</a>
 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<button style="width:200px;height=500px"><a href="userav.php">Available Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">About Crops</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="ordviewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Farming Tips</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Contact Us</button></td></tr>
</table></td>
<td style="border:5px solid black;height:40px;width:700px"><font color="red" size="2" face = "Comic sans MS">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The farmer is one of the most useful people of since the beginning of civilization. We all depend upon <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
agriculture to meet our requirement of food. We get our food because the farmer grows crops and carrie<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the agricultural activities. Though, they feed the entire humanity, their life conditions are far from their &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;satisfactory.Most of the farmers are simple, hard-working, sincere and honest people. They always remain<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; at the mercy of nature and God.</font><br/>
<marquee><img src="giphy.gif"></marquee>
</td>
<td style="border:5px solid black;height:40px;width:400px" ><form id="form1" name="loginform" align="center" method="post" action=""><table><caption>Welcome to green Valley</caption>
<tr style="align:center"><td> </td><td> </td><td>  <td style="align:center"><img src="20.png" alt="login">
<br> <i><b>Login Here</b></i></td></tr>
<tr><td></td><td> </td><td><font color="black">Email id</font></td><td><input type="text" name="u1" required></td></tr>
<tr><td></td><td></td><td><font color="black">Password</font></td><td><input type="password" name="p1" required></td></tr>
<tr><td></td><td> </td><td></td><td><input type="submit" name="submit" value="Sign In"/></td></tr>
<tr><td></td><td><center><font color="black">Not Enrolled?</font></center></td>
<td></td><td><a href="Register.php">Sign Up Now</a></td></tr></table></form></td>
</tr></table>
</body>
</html>