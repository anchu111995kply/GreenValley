


<?php

    include 'connection.php';
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
?>
<html>
<head>
<title>Green Valley</title>
<style>





<style>

img {
	border-radius:50%;
    }
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
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b><center> Green Valley</center></b></font> </td>
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
<tr><td style="height:40px"><button style="width:200px;"><a href="viewusers1.php">View Users</button></td></tr>


<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"> <a href="admin_view_tips.php">View Farming Tips</a></button></td></tr>

<tr><td style="height:40px"><button style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_feed.php"> View Feedbacks</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_cnt.php"> View Contactus</a></button></td></tr>
</table></td><td>

<table  align="center"   border="1">
<caption><b><font size=5>Contacts</b></caption>
<tr><td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Message</td>
</tr>

  <?php


$result ="SELECT * FROM contact";
$result5=mysqli_query($con,$result);
    while($row=mysqli_fetch_array($result5))
    {
		$v= $row['fname'];
		$n= $row['lname'];
		$p= $row['email'];
		$u= $row['subject'];
		
		
	
	//echo $v;
	
		
    ?>
        <tr> 
		<td><?php echo $v; ?></td>
          <td><?php echo $n; ?> </td>
          <td><?php echo $p; ?> </td>
		  <td><?php echo $u; ?> </td>
		  
          </tr>
  <?php
  }
  ?>
  
</tr></table></td></tr></table>
</body>
</html>