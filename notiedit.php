
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
 <li><a href="logout.php">Logout</a></li>
  
 


 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button style="width:200px;"><a href="viewusers.php">View Users</button></td></tr>


<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> <a href="admin_view_tips.php">View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_feed.php"> View Feedbacks</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_cnt.php"> View Contactus</a></button></td></tr>
</table></td>
<?php
include 'connection.php';
if(isset($_GET['notid'])){
                
                        $id=$_REQUEST['notid'];
						$sql2=mysqli_query($con,"SELECT * FROM notification WHERE notid='$id'");
						while($row=mysqli_fetch_array($sql2))
				  {
				  $v= $row['notification'];
				  
				 }
}
				 ?>
 
		<td>		 
				 
				 <form name="f1" id="f1" method="POST" action="#" onsubmit="return" enctype="multipart/form-data">
<table>

<tr>

  <td> </td> <td> </td> <td> </td> <td> </td><td style="height:40px"><button style="width:200px;"><a href="adminview_noti.php">View Notifications</a></button></td>
<td style="height:40px"><button style="width:200px;"><a href="notification.php">Post Notifications</a></button></td></tr>
<tr> </tr>
<tr> </tr>

<tr>
    <td> </td> <td> </td> <td> </td><td><div align="center"> Edit Notification:</div></td></tr>
	<tr>
    <td> <input type= "textarea" name="fname" col="10" value='<?php echo $v ?> '></td></tr>
	<tr align="center">
	<td><input type="submit" name="update" value="update"/></td>
	<?php
	if(isset($_POST["update"]))
	{
		$noti=$_POST["fname"];
		$res="UPDATE `notification` set notification='$noti' where notid='$id'";
		$re=mysqli_query($con,$res);
		?>
		<script>
		alert("Updated");
		window.location("notiedit.php");
		</script>
		<?php
	}
	?>
  </tr>
  </table>
  </td>
</tr></table>
</body>
</html>