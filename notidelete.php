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
<tr><td style="height:40px"><button style="width:200px;"><a href="viewusers.php">View Users</button></td></tr>

<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;">Bank details</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> <a href="admin_view_tips.php">View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
</table></td>
<?php
include 'connection.php';
if(isset($_GET['notid'])){
                
                        $id=$_REQUEST['notid'];
						$sql2=mysqli_query($con,"UPDATE notification SET status='1'  WHERE notid='$id'");
						
                         }
				 ?>
 
		<script>
		alert("Deleted");
		window.location="adminview_noti.php";
		</script>
  </td>
</tr></table>
</body>
</html>