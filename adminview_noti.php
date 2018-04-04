<?php
include 'connection.php';

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
  
  


 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="view.php"style="width:200px;"><a href="viewusers1.php">View Users</a></button></td></tr>

<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_tips.php"> View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_feed.php"> View Feedbacks</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_cnt.php"> View Contactus</a></button></td></tr>

</table></td>
<td> </td> <td></td>
<td>
<table width="400" border="1" align="center" cellpadding="1" style="background-color:yellow">
<caption><b><font size=5>Notifications</b></caption>

  <?php


$result ="SELECT * FROM notification where status='0'";
$result3=mysqli_query($con,$result);
    while($row=mysqli_fetch_array($result3))
    {
    ?>
        <tr> 
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['notification']; ?></td>
		  <td><a href="<?php 
		  $u=$row['notid'];
		  
		  echo "notiedit.php?notid=$u"?>"> <button>EDIT</button></a></td>
		  <td><a href="<?php 
		  $u=$row['notid'];
		  
		  echo "notidelete.php?notid=$u"?>"> <button>DELETE</button></a></td>
          </tr>
  <?php
  }
  ?>
  <?php
    
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
	?>
	
  </td></tr>
</table>
</table>
</body>
</html>
