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
<table style="display: inline-block; float: left; ">
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="viewusers1.php">View Users</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="admin_view_tips.php"> View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_feed.php"> View Feedbacks</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_cnt.php"> View Contactus</a></button></td></tr>
</table></td>
<td> </td> <td></td>




<td>
<table  style="display: inline-block; border: 1px solid;float:left; ">
<tr><td><button><a href="adminav.php">ALL LANDS</a></button></td><td><button><a href="viewblockland.php">BLOCKED LANDS</a></button></td>
<td><button><a href="searchland.php">SEARCH LANDS</a></button></td>


  <table width="100%" border="2" bgcolor="#bfff00">
  <caption><b>Land Information</b></caption>
  
        <tr> 
          <td><strong><font color="#000000">Fname</font></strong></td>
          <td><strong><font color="#000000">Last Name</font></strong></td>
          <td><strong><font color="#000000">State</font></strong></td>
		  <td><strong><font color="#000000">District</font></strong></td>
		  <td><strong><font color="#000000">Village</font></strong></td>
		  <td><strong><font color="#000000">Area</font></strong></td>
		  <td><strong><font color="#000000">Water resource</font></strong></td>
		  <td><strong><font color="#000000">Suitable Crop</font></strong></td>
		  <td><strong><font color="#000000">Amount per year</font></strong></td>
		  <td><strong><font color="#000000">Number of years</font></strong></td>
         <td><strong><font color="#000000">Remarks</font></strong></td>
    
        </tr>
		
     <?PHP
    include("connection.php");
    
    $sql = mysqli_query($con,"select * from register,landregister where landregister.Username=register.Username and landregister.status='0'");
    //echo $sql;exit;
    
    while($row=mysqli_fetch_array($sql))
    {
    ?>
        <form action="#" method="POST">
		<tr> 
          <td><?php echo $row['Fname']; ?></td>
          <td><?php echo $row['Lname']; ?></td>
          <td><?php echo $row['State']; ?></td>
          <td><?php echo $row['District']; ?></td>
		   <td><?php echo $row['Village']; ?></td>
		  <td><?php echo $row['Area']; ?></td>
		  <td><?php echo $row['Wresource']; ?></td>
          <td><?php echo $row['Scrop']; ?></td>
		  <td><?php echo $row['Apyear']; ?></td>
         <td><?php echo $row['Noyear']; ?></td>
     <td><a href="<?php 
		  $u=$row['Landid'];
		  
		  echo "blockland.php?Landid=$u"?>"> Block Land</a></td>
        </tr>
		</form>
  <?php
  }
  ?>
  </td></tr>
</table>
</td>
</tr>
</table>

</body>
</html>