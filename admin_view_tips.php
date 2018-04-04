<?php
    
    include("connection.php");
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
  
  


 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button style="width:200px;"><a href="viewusers1.php">View Users</button></td></tr>


<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_tips.php"> View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_feed.php"> View Feedbacks</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_cnt.php"> View Contactus</a></button></td></tr>
</table></td><td>
<table border="2" bgcolor="#bfff00">
        <tr> 
          <td><strong><font color="#000000">First name</font></strong></td>
          <td><strong><font color="#000000">Last Name</font></strong></td>
		  <td><strong><font color="#000000">Email</font></strong></td>
          <td><strong><font color="#000000">Tip</font></strong></td>
		  
          <td><strong><font color="#000000">Approval</font></strong></td>
		  <td><strong><font color="#000000">Decline</font></strong></td>
        </tr>
  <?PHP
    
	
	$id=$_SESSION['Username'];
    
    $sql = mysqli_query($con,"select * from ftips where `status`='0'");
    //echo $sql;exit;
    
	
    while($row=mysqli_fetch_array($sql))
    {
		 $u=$row['Username'];
		 $w=$row['tipid'];
    ?>
	<?php
	 $sql2 = mysqli_query($con,"select * from register where register.Username='$u'");
	 while($row2=mysqli_fetch_array($sql2))
    {
		 $u1=$row2['Fname'];
		 $v=$row2['Lname'];
		 
	?>
        <tr> 
		<form action="#" method="POST" >
          <td><?php echo $row2['Fname']; ?> </td>
		   <td> <?php echo $row2['Lname']; ?> </td>
		  
		  <td><?php echo $row['Username']; ?> </td>
          <td><?php echo $row['tip']; ?> </td>
          

<td><input type="submit"  value="Approve"  name="submit"/></td>
<td><input type="submit"  value="Decline"  name="cancel"/></td>
 
	 </form>
        </tr>
		<?php
  }
	
  ?>
		
  <?php
  }
	
  ?>
  <?php
  	if(isset($_POST["submit"]))
{


$sql7="UPDATE `ftips` SET `status`='1' where tipid ='$w'";
$resul=mysqli_query($con,$sql7);
?>


		  <script>
                    //window.location="agrement.php";
                    alert("Approved");
            </script>
			<?php
}

?>
<?php
  	if(isset($_POST["cancel"]))
{
$sql8="SELECT * from ftips";
$resul2=mysqli_query($con,$sql8);
while($row4=mysqli_fetch_array($resul2))
    {
		 $e1=$row4['status'];
	}
		 
if($e1=='1'){
	?>
	<script>
                    //window.location="agrement.php";
                    alert("Already approved");
            </script>
    

<?php
}
       else{
		 
		   
	?>
	      <script>
                    //window.location="agrement.php";
                    alert("Not approved");
            </script>
<?php
		
}
?>
<?php
	
}
?>
			
</tr></table></td></tr></table>
</body>
</html>