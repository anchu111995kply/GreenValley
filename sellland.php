<?php
include 'connection.php';
$id=$_SESSION['Username'];
$result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];
$Photo=$row3['Photo'];
}

   
//echo $id;
if(isset($_POST["save"]))
{

$a=$_POST["state"];
$b=$_POST["district"];
$c=$_POST["village"];
$g=$_POST["pan"];
$h=$_POST["ward"];
$i=$_POST["sur"];
$d=$_POST["area"];
$j=$_POST["cent"];
$e=$_POST["select5"];
$k=$_POST["select4"];
$l=$_POST["amp"];

$sql1="SELECT * from state where Sid='$a'";
$result5=mysqli_query($con,$sql1);
while($row5 = mysqli_fetch_array($result5))
{ 
$name=$row5['Sname'];
}

$sql2="SELECT * from district where Did='$b'";
$result6=mysqli_query($con,$sql2);
while($row6 = mysqli_fetch_array($result6))
{ 
$dist=$row6['Distname'];
}
$sql3="SELECT * from village where Vid='$c'";
$result7=mysqli_query($con,$sql3);
while($row7 = mysqli_fetch_array($result7))
{ 
$vil=$row7['Vname'];
}
$c = date('Y-m-d');
$date=date_create($c);
date_add($date,date_interval_create_from_date_string("15 days"));
//echo date_format($date,"Y-m-d");
$exp=date_format($date,"Y-m-d");
//echo $exp;

$sql="INSERT INTO `sellland`(  `State`, `District`, `Village`,`Panchayat`,`Wardno`,`Survyno`,`Acre`,`Cent`, `Wresource`, `Scrop`,`Amtcent`,`Username`) VALUES ('$name','$dist','$vil','$g','$h','$i','$d','$j','$e','$k','$l','$id')";
$result=mysqli_query($con,$sql);

?>
<script>
                    window.location="sellland.php";
                    alert("Successfully added ");
            </script>
			<?php

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
img{
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
<script>
function valid()
{
	 if(document.sellla.area.value=="")
  {
     alert("enter area");
	 document.sella.area.focus();
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
  if(!document.sella.pan.value.match(/^[a-z A-Z]+$/))
  {
     alert("alphabets only");
	 document.sella.pan.focus();
	 return false;
   } 
   var mobile=document.sella.sur.value;
   if(mobile.length!=13)
   {
     alert("survey number contain 13 digit");
		 document.reg.sur.focus();
	 return false;
	}
   
   
   
}
</script>
<script>
function validat(){

	 var valfname= /^[A-Za-z]+$/;
	 x1=document.sellla;
        t1=x1.pan.value;
	

	 if(!valfname.test(t1)){

      alert("Invalid Panchayat name");
	   
      return false;
    }

}

function valida(){
        x=document.sellla;
        t=x.sur.value;
        if (isNaN(t) || (t.length!=11) ) {
        alert(" Invalid survey number")
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
 <img src="<?php echo $Photo ?>" width="50" height="40" alt="no image found"/>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="feedback.php">Feedback</a></li>
 <li><a href="viewmsg.php">Messages</a>

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
<tr><td style="height:40px"><button style="width:200px;"><a href="sellland.php">Sell ur Lands</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="ftips.php"> Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="bloklands.php">Blocked Lands</a></button></td></tr>
</table></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td style="align:center"><table bgcolor="#bfff00" style=" border-radius: 15px 25px;"><tr><td><form id="form2" name="sellla" method="POST" action="#" onSubmit="return valid()">
<table><caption>SELL YOUR LAND</caption>
<tr><td>State</td><td><select name="state" onchange="getId(this.value);">
     <option value="">State</option>
     
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

      <tr><td>Panchayat</td><td style="width:40" ><input type="text" name="pan" onchange="validat()" required ></td></tr>

      </select></td></tr> 
	  <tr><td>Ward Number </td><td><input type="number" name="ward" required min="1" max="30"></td>
	  <tr><td>Survey Number </td><td><input type="number" name="sur" onchange="valida()"   required></td>
	  
<tr><td>Acre</td><td><input type="number" name="area" required min="1" max="50" width="48"></td></tr><tr><td>Cent</td><td><input type="number" name="cent" required min="1" max="99"></td>
</tr>
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
<tr><td>Amount per Cent</td><td><input type="number" name="amp" required min="30000" max="200000"></td></tr>

<tr><td><input type="submit" value="Save" name="save"/></td><td><a href="userhome.php"><input type="submit" value="Cancel" name="submi"/></a></td></tr>
</tr></table>
</form>
</td>
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