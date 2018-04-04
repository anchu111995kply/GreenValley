<?php
include("connection.php");
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
<table style="display: inline-block; float: left; ">
<tr>
<td style="height:40px">
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="viewusers1.php">View Users</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="notification.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_tips.php"> View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button onClick="Available.php" style="width:200px;"><a href="adminav.php">Registered Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_feed.php"> View Feedbacks</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="admin_view_cnt.php"> View Contactus</a></button></td></tr>
</table></td>
<td> </td> <td></td>




<td>
<table  style="display: inline-block;float:left; ">
<tr><td><button><a href="adminav.php">ALL LANDS</a></button></td><td><button><a href="viewblockland.php">BLOCKED LANDS</a></button></td>
<td><button><a href="searchland.php">SEARCH LANDS</a></button></td></tr>

<tr>
<form action="#" method="POST" name="f3">
<td> State</td><td><select name="state" onchange="getId(this.value);">
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
   </select>

</td>
<td>District</td><td>
<select name="district" id="district" onchange="getId1(this.value);">
        <option value=" ">District</option>

      </select>
	  
</td>
<td>Village</td><td>
<select name="village" id="village">
        <option value=" ">Village</option>

      </select>
	  
	  <td><input type="submit" name="search" value="search now"></td>
</tr>

  <table width="100%" border="2" bgcolor="#bfff00">
  <caption><b>Land Information</b></caption>
  
        <tr> 
          <td><strong><font color="#000000">Email</font></strong></td>
          
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
		</form>
     <?PHP
    if(isset($_POST["search"]))
{
$a=$_POST['state'];
$b=$_POST['district'];
$c=$_POST['village'];

$sql1=mysqli_query($con,"select Sname from state where Sid='$a'");
while($row1=mysqli_fetch_array($sql1))
				  {
				  $v= $row1['Sname'];
				  
				  }
	$sql9=mysqli_query($con,"select Distname from district where Did='$b'");
while($row2=mysqli_fetch_array($sql9))
				  {
				  $x= $row2['Distname'];
				  
				  }	
$sql11=mysqli_query($con,"select Vname from village where Vid='$c'");
while($row3=mysqli_fetch_array($sql11))
				  {
				  $y= $row3['Vname'];
				  
				  }	
				  
    $sql = mysqli_query($con,"select * from landregister where state='$v' and district='$x' and village='$y' and landregister.status='0'");
    //echo $sql;exit;
    if(count($sql) < 0){
         echo "Results not found";
     }
    while($row=mysqli_fetch_array($sql))
    {
	
		
    ?>
        <form action="#" method="POST">
		<tr> 
          <td><?php echo $row['Username']; ?></td>
          
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
}}

				  
		  
  ?>
  
  <script src="jquery-3.2.1.min.js"></script>
<script src="js/validation.js"></script>
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
  </td></tr>
</table>
</td>
</tr>
</table>

</body>
</html>