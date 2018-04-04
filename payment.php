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

}
?>
<?php
if(isset($_GET['Landid'])){
	  
                
                        $id1=$_REQUEST['Landid'];
						//echo $id1;
}
$sql3=mysqli_query($con,"SELECT * FROM booking,landregister WHERE remarks='Booked' and booking.Landid='$id1' and landregister.Landid='$id1'");
						while($row=mysqli_fetch_array($sql3))
				  {
				  $v= $row['remarks'];
				  $cust=$row['cust_user'];
                  $d=$row['email'];
                $q=$row['Apyear'];
				  
					$u=$row['Landid'];		   
							   
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
<script>
function validat(){
        x=document.payment;
        tx=x.cvv.value;
        if (isNaN(tx) || tx < 100 || tx > 999) {
        alert("Not a valid CVV number")
    } else {
        return true
    }
}

function valida(){
        x=document.payment;
        t=x.cn.value;
        if (isNaN(t) || (t.length!=16) ) {
        alert(" Invalid card number")
    } else {
        return true
    }
	
	
	
}
</script>

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
<tr><td style="height:40px"><button style="width:200px;"> <a href="ftips.php">Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming Tips</a></button></td></tr>
</table></td>
<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<table border="1" style="border-radius:25px;">
<tr><img src="paypal.png" alt="payment"></tr>
<form action="#" method="POST" name="payment">
<tr><td> Card Type </td><td><select name="s1">
<option value="Visa">Visa</option>
<option value="mc">Master Card</option>
<option value="Rupay">Rupay</option>
</select></td>
<tr><td>Card Number</td><td><input type="text" name="cn" onchange="valida()" required></td></tr>
<tr><td>CVV Number</td><td><input type="text" name="cvv" onchange="validat()" required></td></tr>
<tr><td>Bank Name </td><td><select name="s2">
<option value="Visa">Union Bank</option>
<option value="mc">South Indian Bank</option>
<option value="Rupay">State bank of India</option>
<option value="Rupay">Federal Bank</option>
</select></td>
<tr><td>Amount</td><td><input type="number" name="amount" readonly value="<?php echo $q ?>"></td></tr>
<tr><td><input type="submit" name="submit" value="Pay Now"></td><td><input type="submit" name="submit" value="Cancel"></td></tr>
</form>
</table></td>
</tr></table>
<?php
if(isset($_POST["submit"]))
{
	$a=$_POST["s1"];
$b=$_POST["cn"];
$c=$_POST["cvv"];

$e=$_POST["amount"];
$k=$_POST["s2"];
$l=$c = date('Y-m-d');
$sql="INSERT INTO `payment`( `ctype`, `cardno`, `bankname`, `cvv`, `amount`,`date`,`owner`,`customer`) VALUES ('$a','$b','$k','$c','$e','$l','$d','$cust')";
//echo "Inserted";
$result=mysqli_query($con,$sql);
?>
<script>

alert("Successfully Paid");
window.location("available.php");
</script>
<?php
}
?>
</body>
</html>