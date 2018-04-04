<?php
include("connection.php");
$id=$_SESSION['Username'];
$result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];
$Photo=$row3['Photo'];
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
	.footer{
	position:absolute;
	top:800px;
	width:100%;
	color:white;
	background-color:green;
	height:120px;
}
</style>
</head>
<body>
<table>
<tr style="width:100%"><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
<font size=5 color="red"><b>WELCOME</b> <i> <?php echo $Fname ?></i></font>
<img src="<?php echo $Photo ?>" width="50" height="40" alt="no image found"/>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 <li><a href="viewmsg.php">Messages</a></li>

<li><a href="mnu.php">Change Password</a>
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
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;">Available Lands</button></td></tr>
<tr><td><button style="width:200px;height=500px"><a href="sellland.php">Sell ur Land</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="ftips.php"> Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="bloklands.php">Blocked Lands</a></button></td></tr>
</table></td>
<td>
<table border="2" bgcolor="#bfff00" width=90%>

<caption><b>Land for Lease</b></caption>
        <tr> 
          <td><strong><font color="#000000">Fname</font></strong></td>
          <td><strong><font color="#000000">Last Name</font></strong></td>
		  <td><strong><font color="#000000">Email</font></strong></td>
          <td><strong><font color="#000000">State</font></strong></td>
		  <td><strong><font color="#000000">District</font></strong></td>
		  <td><strong><font color="#000000">Village</font></strong></td>
		  <td><strong><font color="#000000">Area</font></strong></td>
		  <td><strong><font color="#000000">Water resource</font></strong></td>
		  <td><strong><font color="#000000">Suitable Crop</font></strong></td>
		  <td><strong><font color="#000000">Amount per year</font></strong></td>
		  <td><strong><font color="#000000">Number of years</font></strong></td>
          <td><strong><font color="#000000">Booking</font></strong></td>
          <td><strong><font color="#000000">View</font></strong></td>
		  
        </tr>
  <?PHP
    
	$id=$_SESSION['Username'];
	?>
    <?php

$resul ="SELECT * from state,landregister where state.Sid=landregister.State  ";
$result4=mysqli_query($con,$resul);
while($row4 = mysqli_fetch_array($result4))
{ 
$name=$row4['Sname'];
}
?>
<?php

$resul ="SELECT * from district,landregister where district.Did=landregister.District  ";
$result5=mysqli_query($con,$resul);
while($row5 = mysqli_fetch_array($result5))
{ 
$name1=$row5['Distname'];
}
//echo $name;
?>
<?php

$resul4 ="SELECT * from village,landregister where village.Vid=landregister.Village  ";
$result6=mysqli_query($con,$resul4);
while($row6 = mysqli_fetch_array($result6))
{ 
$name2=$row6['Vname'];
}
//echo $name;
?>

<?php
    $sql = mysqli_query($con,"select * from register,landregister where landregister.Username=register.Username and landregister.Username!='$id' and register.Username!='$id' and landregister.remarks!='booked'");;
    //echo $sql;exit;
    
	
    while($row=mysqli_fetch_array($sql))
    {
		 $u=$row['Landid'];
		 
    ?>
        <tr> 
		<form action="#" method="POST" >
          <td><input type="text" style="width:70px;" name="f1"  readonly value='<?php echo $row['Fname']; ?> '></td>
          <td><input type="text" style="width:70px;" name="l1"readonly value='<?php echo $row['Lname']; ?> '></td>
		  <td><input type="text" style="width:130px;" name="u1" readonly value='<?php echo $row['Username']; ?> '></td>
          <td><input type="text" style="width:70px;" name="s1" readonly value='<?php echo $row['State']; ?> '></td>
          <td><input type="text" style="width:70px;" name="d1" readonly value='<?php echo $row['District']; ?> '></td>
		   <td><input type="text" style="width:70px;" name="v1"readonly value='<?php echo $row['Village']; ?> '></td>
		  <td><input type="text" style="width:70px;" name="a1"readonly value='<?php echo $row['Area']; ?> '></td>
		  <td><input type="text" style="width:110px;" name="w1"readonly value='<?php echo $row['Wresource']; ?> '></td>
          <td><input type="text" style="width:100px;" name="c1"readonly value='<?php echo $row['Scrop']; ?> '></td>
		  <td><input type="text" style="width:70px;" name="p1"readonly value='<?php echo $row['Apyear']; ?> '></td>
         <td><input type="text"  style="width:70px;"name="n1" readonly value='<?php echo $row['Noyear']; ?> '></td>
		 
<td><strong><input type="submit"  value="Book Now"  name="submit"/></strong></td>
 <td><a href="<?php 
		  $u=$row['Landid'];
		  
		  echo "dumagri.php?Landid=$u"?>"> View document </a>
		  </td>
	 </form>
        </tr>
  <?php
  }
	
  ?>
  
  <?php
    
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
	?>
	<?php
	if(isset($_POST["submit"]))
{
$c = date('Y-m-d');
$a=$_POST["u1"];

$sql3="SELECT * FROM landregister";
$result3=mysqli_query($con,$sql3);
while($row1 = mysqli_fetch_array($result3))
{ 
$lid=$row1['Landid'];
}

		 $sql="INSERT INTO `booking`(  `cust_user`, `email`, `date`,`Landid`) VALUES ('$id','$a','$c','$lid')";
		 //echo $sql;
$result1=mysqli_query($con,$sql);
$sql2="UPDATE `landregister` SET `remarks`='Booked' where Landid ='$lid'";
$resul=mysqli_query($con,$sql2);
?>


		  <script>
                    //window.location="agrement.php";
                    alert("Booked,Click on View document ");
            </script>
			<?php
}

?>


  </td></tr>
</table>
<table border="2" bgcolor="skyblue" width="40%">
<caption><b>Land for Sale</b></caption>

        <tr> 
          <td><strong><font color="#000000">Fname</font></strong></td>
          <td><strong><font color="#000000">Last Name</font></strong></td>
		  <td><strong><font color="#000000">Email</font></strong></td>
          <td><strong><font color="#000000">State</font></strong></td>
		  <td><strong><font color="#000000">District</font></strong></td>
		  <td><strong><font color="#000000">Village</font></strong></td>
		  <td><strong><font color="#000000">Panchayat</font></strong></td>
		  <td><strong><font color="#000000">Ward No</font></strong></td>
		  <td><strong><font color="#000000">Survey No</font></strong></td>
		  <td><strong><font color="#000000">Acres</font></strong></td>
		  <td><strong><font color="#000000">Cent</font></strong></td>
		  
		  
		  <td><strong><font color="#000000">Amount per cent</font></strong></td>
		  
         <td><strong><font color="#000000">Contact No</font></strong></td>
		 <td><strong><font color="#000000">Message</font></strong></td>
          
        </tr>
  <?PHP
    
	$id=$_SESSION['Username'];
	
	
	
	
    
    $sql1 = mysqli_query($con,"select * from register,sellland where sellland.Username=register.Username and sellland.Username!='$id' and register.Username!='$id'");;
    //echo $sql;exit;
    
	
    while($row3=mysqli_fetch_array($sql1))
    {
		 
    ?>
        <tr> 
		<form action="#" method="POST" name="f3" id="f3" >
          <td><input type="text" style="width:70px;" name="f1"  readonly value='<?php echo $row3['Fname']; ?> '></td>
          <td><input type="text" style="width:70px;" name="l1"readonly value='<?php echo $row3['Lname']; ?> '></td>
		  <td><input type="text" style="width:130px;" name="u1" readonly value='<?php echo $row3['Username']; ?> '></td>
          <td><input type="text" style="width:70px;" name="s1" readonly value='<?php echo $row3['State']; ?> '></td>
          <td><input type="text" style="width:70px;" name="d1" readonly value='<?php echo $row3['District']; ?> '></td>
		   <td><input type="text" style="width:70px;" name="v1"readonly value='<?php echo $row3['Village']; ?> '></td>
		   <td><input type="text" style="width:70px;" name="v1"readonly value='<?php echo $row3['Panchayat']; ?> '></td>
		   <td><input type="text" style="width:70px;" name="v1"readonly value='<?php echo $row3['Wardno']; ?> '></td>
		   <td><input type="text" style="width:70px;" name="v1"readonly value='<?php echo $row3['Survyno']; ?> '></td>
		  <td><input type="text" style="width:70px;" name="a1"readonly value='<?php echo $row3['Acre']; ?> '></td>
		  <td><input type="text" style="width:70px;" name="v1"readonly value='<?php echo $row3['Cent']; ?> '></td>
		  
          
		  <td><input type="text" style="width:70px;" name="p1"readonly value='<?php echo $row3['Amtcent']; ?> '></td>
		   <td><input type="text" style="width:70px;" name="p1"readonly value='<?php echo $row3['Phno']; ?> '></td>
         <td><strong><a href="<?php 
		  $s=$row3['sellid'];
		  
		  echo "message.php?sellid=$s"?>">Send Message</a></strong></td>
		 

	 </form>
        </tr>
  <?php
  }
	
  ?>
  <?php
    
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
	?>
</table></td></tr></table>
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
