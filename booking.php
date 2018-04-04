<?php
include 'connection.php';
   $id1=$_SESSION['Username'];  
$result ="SELECT * FROM register where Username='$id1'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];

}
   
   if(isset($_GET['Landid'])){
                
                        $id=$_REQUEST['Landid'];
						$sql2=mysqli_query($con,"SELECT * FROM landregister WHERE Landid='$id'");
						while($row=mysqli_fetch_array($sql2))
				  {
				  $v= $row['remarks'];
				  
				 }
						
					if($v=='Not Booked'){
						?>
                       <script>
                    window.location="registerland.php";
                    alert("Not Booked");
            </script>						
 
 <?php
					}
					else {
						
						
                        $sql1=mysqli_query($con,"SELECT * FROM booking WHERE Landid='$id'");
                            while($records1=mysqli_fetch_array($sql1)){
								$cust=$records1['cust_user'];
//echo $cust;
                               $date=$records1['date'];
                               //$Phno=$records1['Phno'];
							   
}

			}



			
$sql2=mysqli_query($con,"SELECT * FROM register WHERE register.Username='$cust'");
while($row3=mysqli_fetch_array($sql2))
{
								$a=$row3['Fname'];

                               $b=$row3['Lname'];
                               $c=$row3['Housename'];
							   $d=$row3['Place'];
							   $e=$row3['Village'];
							  // $f=$row3['Place'];
							   //$g=$row3['Village'];
							   $h=$row3['District'];
							   $i=$row3['State'];
							   $j=$row3['Phno'];
							   $k=$row3['Photo'];
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
.footer{
	position:absolute;
	top:800px;
	width:100%;
	color:white;
	background-color:green;
	height:120px;
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
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>

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
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="available.php">Available Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="ftips.php"> Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Contact Us</button></td></tr>
</table></td>
<td><form> <table><tr>
<td><img src="<?php echo $k ?>" width="129" height="129" alt="no image found"/></td></tr>
    <tr><td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><input type="text" name="username" readonly value='<?php echo $a ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><input type="text" name="lastname" readonly value='<?php echo $b ?> '></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">House Name:</div></td>
    <td valign="top"><input type="text" name="state" readonly value='<?php echo $c ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Place:</div></td>
    <td valign="top"><input type="text" name="hname" readonly value='<?php echo $d ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Village: </div></td>
    <td valign="top"><input type="text" name="place" readonly value='<?php echo $e ?> '></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">District: </div></td>
    <td valign="top"><input type="text" name="place" readonly value='<?php echo $h ?> '></td>
	 </tr>
	 <tr>
    <td valign="top"><div align="left">State: </div></td>
    <td valign="top"><input type="text" name="place" readonly value='<?php echo $i ?> '></td>
	 </tr>
	 <tr>
    <td valign="top"><div align="left">Date: </div></td>
    <td valign="top"><input type="text" name="place" readonly value='<?php echo $date ?> '></td>
	 </tr>
  <td><a href="registerland.php">Back</a>
  </td></tr>
</table>
</td></td>
</tr></table>
<footer><div class="footer">           <table  align="center" cellpadding="10px">               <tr>                   <td width="33%">                       <img src="icon6.png" alt="icon6" width="40px" height="40px"/>
                    </td>
                    <td width="33%">
                        <img src="icon7.png" alt="icon7" width="40px" height="40px"/> 
                    </td>
                    <td width="33%">
                        <img src="icon8.png" alt="icon8" width="40px" height="40px"/>
                    </td>
                </tr>
            </table>
            <i style="position:relative;top:20px;left:320px;">@2018 Amal Jyothi College of Engineering.All rights Reserved. Powered by Department of MCA 
 <a href="#main">Top</a></i>
        </div></footer> 

</body>
</html>


        