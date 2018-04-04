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


 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="view.php"style="width:200px;"><a href="view.php">View Users</a></button></td></tr>

<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;">Available Lands</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="ftips.php">  Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Contact Us</button></td></tr>
</table></td>
<td>
<table border="2" bgcolor="#bfff00">
        <tr> 
          
		  <td style="width:50"><strong><font color="#000000">State</font></strong></td>
          <td><strong><font color="#000000">District</font></strong></td>
		  <td><strong><font color="#000000">Village</font></strong></td>
		  <td><strong><font color="#000000">Area</font></strong></td>
		  
          </tr>
  <?PHP
    
	
    include 'connection.php';

if(isset($_GET['Regid'])){
                
                        $id1=$_REQUEST['Regid'];
						//$sql2=mysqli_query($con,"UPDATE `register` SET status='1' WHERE Regid='$id1'");
						$sql5=mysqli_query($con,"SELECT * from register where Regid='$id1'");
						while($row3 = mysqli_fetch_array($sql5))
                            { 
                                $user=$row3['Username'];
								$fname=$row3['Fname'];
								$lname=$row3['Lname'];
								$st=$row3['status'];
								
                            }
							
						
						$sql4=mysqli_query($con,"SELECT * from landregister where Username='$user'");
						
						if(mysqli_num_rows($sql4)===0)
	{
		?>
		<script>
		alert("Not involved in any services of Green Valley");
		
		</script>
		<?php
	}
						
							
						while($row2 = mysqli_fetch_array($sql4))
                            { 
                             
							   $area=$row2['Area'];
								$village=$row2['Village'];
								$dist=$row2['District'];
								$state=$row2['State'];
							
							 
                         
								
								
	
	
   
    ?>
        <tr> 
		<form action="#" method="POST" >
          <td><input type="text"  name="s1" readonly value='<?php echo $row2['State']; ?> '></td>
          <td><input type="text"  name="d1" readonly value='<?php echo $row2['District']; ?> '></td>
		   <td><input type="text"  name="v1"readonly value='<?php echo $row2['Village']; ?> '></td>
		  <td><input type="text" name="a1"readonly value='<?php echo $row2['Area']; ?> '></td>
		  
		  
<?php
}}
?>
   </form>                    						
 </tr>

</table>
<br/>
 <form action="#" method="POST" name="f1" >
 DO U REALLY WANT TO BLOCK <input type="submit" name="submit" value="YES">
		  <input type="submit" name="cancel" value="NO">
		  <?php
		  if(isset($_POST["submit"]))
		  {
			  $sql2=mysqli_query($con,"UPDATE `register` SET status='1' WHERE Regid='$id1'");
			  ?>
			  <script>
			  alert("Blocked");
			  window.location="viewusers1.php";
			  </script>
		  <?php
		  }
		  
			?> 
<?php			
	if(isset($_POST["cancel"]))
		  {
			 
			  ?>
			  <script>
			  window.location="viewusers.php";
			  </script>
		  <?php
		  }
		  
			?>  		
</body>	
</html>		
