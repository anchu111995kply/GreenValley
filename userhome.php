
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
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
<font size=5 color="red"><b>WELCOME</b> <i> <?php echo $Fname ?></i></font>
<img src="<?php echo $Photo ?>" width="50" height="40" alt="no image found"/>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="viewmsg.php">Messages</a></li>
 <li><a href="feedback.php">Feed Back</a></li>

<li><a href="changepass.php">Change Password</a>
 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
<?php
// I'm India so my timezone is Asia/Calcutta
date_default_timezone_set('Asia/Calcutta');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "<p><font color=red >Good Morning!</font></p>";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "<p><font color=red >Good Afternoon!</font></p>";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "<p><font color=red>Good Evening!</font></p>";;
}
?>
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
<tr><td style="height:40px"><button style="width:200px;"><a href="bloklands.php">Blocked Details</a></button></td></tr>
</table></td>
 <td><table  style= "border-radius: 25px;
    border: 2px solid #73AD21;">
	<tr><td><table>
	 <td> <img src="r.png" alt="land" style=" border-radius: 50%;"> </td>

<td> <img src="fa.png" alt="land" style=" border-radius: 50%;"> </td>

<td> <img src="img1.png" alt="land" style=" border-radius: 50%;"> </td>
 </tr> </td></table>
 <tr><td><table>
<tr> <td> 
farmland lease is an arrangement where a farmer who does not own enough suitable land to raise crops leases farmable land from someone else. Farmland leases<br/> are the most common types of land leases in areas where farmable land is a hot commodity, such on the far east and west cost, particularly in Kerala and the state<br/> area. Landlords that own large plots of farmable land often lease their plots to tenants when they have no interest in farming the land themselves. Farmland leases<br/> may allow tenants to raise livestock or keep animals such as horses in areas where sufficient space is not readily available or affordable.</td>
</tr>
	 
</table></td>
</tr></table></td>
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
<body>
<html>