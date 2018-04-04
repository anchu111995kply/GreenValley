
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
<?php
if(isset($_POST["submit"]))
{
$a=$_POST["feedback"];


$sql="INSERT INTO `feedback`(  `Username`, `feed`) VALUES ('$id','$a')";
$result4=mysqli_query($con,$sql);
//echo $sql;
?>
<script>
                    window.location="feedback.php";
                    alert("Feedback Send Successfully ");
            </script>
			<?php
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
  
  <li><a href="about.php">About</a></li>
 <li><a href="viewmsg.php">Messages</a></li>

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
</table></td>
<td></td><td></td><td></td><td></td>
<td><table><form name="f2" method="post" id="f2" action="#">
<tr><td><textarea name="feedback" placeholder="Write feedback.." style="height:200px;Width:300px" ></textarea></td></tr>
<tr><td><input type="submit" name="submit" value="Send"></td></tr></form>
</td>
</tr></table> 
</body>
</html>