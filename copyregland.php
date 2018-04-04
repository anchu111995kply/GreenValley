<?php
include 'connection.php';
$id=$_SESSION['Username'];
$result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];

}

   
//echo $id;
if(isset($_POST["submit"]))
{

$a=$_POST["state"];
$b=$_POST["district"];
$c=$_POST["village"];
$d=$_POST["area"];
$e=$_POST["select5"];
$k=$_POST["select4"];
$l=$_POST["amp"];
$f=$_POST["noy"];

$sql="INSERT INTO `landregister`(  `State`, `District`, `Village`, `Area`, `Wresource`, `Scrop`,`Apyear`,`Noyear`, `Username`,`remarks`) VALUES ('$a','$b','$c','$d','$e','$k','$l','$f','$id','Not Booked')";
$result=mysqli_query($con,$sql);

echo "datas are entered..!!";

}
?>
<?php
$query = "SELECT Sname from `state`";
$result2 = mysqli_query($con, $query);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

?>
<?php
    
    
    if(!isset($_SESSION['Username'])){
        header("location:index.php");
    }
	?>
	<?php
	$get="SELECT cropname FROM `crop`";
	$result3=mysqli_query($con, $get);
	$options1 = "";
 while($row3 = mysqli_fetch_array($result3))
{
$options1 = $options1."<option>$row3[0]</option>";
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
function valid()
{
	 if(document.regla.area.value=="")
  {
     alert("enter area");
	 document.regla.area.focus();
	 return false;
  }
	if(isNaN(document.regla.area.value))
    {
     alert("using only numbers");
	 document.regla.area.focus();
	 return false;
   }
   
   if(document.regla.noy.value=="")
  {
     alert("enter Number of years");
	 document.regla.noy.focus();
	 return false;
  }
  if(isNaN(document.regla.noy.value))
    {
     alert("using only numbers");
	 document.regla.noy.focus();
	 return false;
   } 
  if(document.regla.wresource.value=="")
  {
     alert("enter Water Resource");
	 document.regla.wresource.focus();
	 return false;
  }
  if(!document.regla.wresource.value.match(/^[a-z A-Z]+$/))
  {
     alert("alphabets only");
	 document.regla.wresource.focus();
	 return false;
   } 
   if(document.regla.scrop.value=="")
  {
     alert("enter Suitable crop");
	 document.regla.scrop.focus();
	 return false;
  }
  if(!document.regla.scrop.value.match(/^[a-z A-Z]+$/))
  {
     alert("alphabets only");
	 document.regla.scrop.focus();
	 return false;
   } 
}
</script>
</head>
<body>
<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(download4.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
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
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming tips</a></button></td></tr>
</table></td>
<td><table width="100%" border="2" bgcolor="#bfff00">
        <tr> 
          
          <td><strong><font color="#000000">State</font></strong></td>
		  <td><strong><font color="#000000">District</font></strong></td>
		  <td><strong><font color="#000000">Village</font></strong></td>
		  <td><strong><font color="#000000">Area</font></strong></td>
		  <td><strong><font color="#000000">Water resource</font></strong></td>
		  <td><strong><font color="#000000">Suitable Crop</font></strong></td>
		  <td><strong><font color="#000000">Amount per year</font></strong></td>
		  <td><strong><font color="#000000">Number of years</font></strong></td>
          <td><strong><font color="#000000">Remarks</font></strong></td>
          <td><strong><font color="#000000">Details</font></strong></td>
         
        </tr>
		
		<?php

$resul ="SELECT * from state,landregister where state.Sid=landregister.State";
$result4=mysqli_query($con,$resul);
while($row4 = mysqli_fetch_array($result4))
{ 
$name=$row4['Sname'];
}
//echo $name;
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
		$s2=mysqli_query($con,"SELECT * from booking");
		while($row=mysqli_fetch_array($s2))
				  {
				  $v= $row['Landid'];
				  
				  }
		$s3=mysqli_query($con,"SELECT * from landregister");
		while($row=mysqli_fetch_array($s3))
				  {
				  $u= $row['Landid'];
				  //$c=$row['remarks'];
				  }
		//echo $u;
			//echo $v;
		$res="UPDATE `landregister` SET `remarks`= 'Booked' WHERE $v = $u";
		$res1=mysqli_query($con,$res);
        $result1=mysqli_query($con,"SELECT * from landregister where Username='$id'");
		
 while($row=mysqli_fetch_array($result1))
    {
		$c=$row['remarks'];
    ?>
        <tr> 
          <form action="#" method="POST">
          <td><?php echo $name; ?></td>
          <td><?php echo $name1; ?></td>
		   <td><?php echo $name2; ?></td>
		  <td><?php echo $row['Area']; ?></td>
		  <td><?php echo $row['Wresource']; ?></td>
          <td><?php echo $row['Scrop']; ?></td>
		  <td><?php echo $row['Apyear']; ?></td>
         <td><?php echo $row['Noyear']; ?></td>
		 
		 <td><strong><?php echo $row['remarks']; ?></strong></td>
		 
		 <td><a href="<?php 
		  $u=$row['Landid'];
		  $c=$row['remarks'];
		  echo "booking.php?Landid=$u"?>"> More details </a>
		  </td>
		  </form>
        </tr>
  <?php
	}
  ?>
  <?php
	if(isset($_POST["more"]))
{
	
$sql3="SELECT * FROM booking,register where booking.cust_user=register.Username";

$result3=mysqli_query($con,$sql3);
while($row=mysqli_fetch_array($result3))
				  {
				  $v= $row['date'];
				  $s=$row['cust_user'];
				  
				  }
//$message = '$v';

echo "<SCRIPT>
alert('Date:'+'$v'+'Email id :'+'$s');
</SCRIPT>";
//echo "Password Changed";

}



?>
  
  <tr> </tr>
  <tr> </tr>
  </table>
  
  
  
<td><table bgcolor="#bfff00"><tr><td><form id="form2" name="regla" method="POST" action="#" onSubmit="return valid()">
<table><caption>ADD YOUR LAND</caption>
<tr><td>State</td><td><select name="state" onchange="getId(this.value);">
     <option value="">select state</option>
     <option value="">select state</option>
     <?php
     $query = "SELECT * FROM state";
     $results = mysqli_query($con, $query);
     while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["Sid"];?>"> <?php echo $row["Sname"]; ?> </option>

<?php
echo $row["Sname"];
     }
     ?>
<tr><td>District</td><td><select name="district" id="district" onchange="getId1(this.value);">
        <option value=" ">District</option>

      </select></td></tr>
<tr><td>Village</td><td><select name="village" id="village">
        <option value=" ">Village</option>

      </select></td></tr>
<tr><td>Area</td><td><input type="number" name="area" required min="1" max="50"></td></tr>
<tr><td>Water Resource</td><td><select name="select5" id="select5" required>
<option value="River">River</option>
  <option value="Dam">Dam</option>
<option value="Well">Well</option>
<option value="Bore Well">Bore well</option>
<option value="Pond">Pond</option>
</select></td></tr>
<tr><td>Suitable Crop</td> <td><select name="select4"> 
 <?php echo $options1;?>
</select></td></tr>
<tr><td>Amount per Year</td><td><input type="number" name="amp" required min="10000" max="200000"></td></tr>
<tr><td>Number of years</td><td><input type="number" name="noy" required min="3" max="15"></td></tr>
<tr><td><input type="submit" value="Save" name="submit"/></td><td><a href="login.php"><input type="submit" value="Cancel" name="submi"/></a></td></tr>
</tr></table>
</form>
</td>
</tr>
</table>
</td>
</tr>
</table>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/validation.js"></script>
</script>
<script src="js/jquery.js"></script>



   <script>
function getId(val){

  $.ajax({
    type: "POST",
    url: "getdata.php",
    data: "Sid="+val,
    success: function(data){
      $("#district").html(data);

}
});
}

 function getId1(val){

  $.ajax({
    type: "POST",
    url: "getdata1.php",
    data: "Did="+val,
    success: function(data){
      $("#village").html(data);

}
});
} 
</script>
</body>
</html>