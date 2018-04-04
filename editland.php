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
						
					if($v=='Booked'){
						?>
                       <script>
                    window.location="registerland.php";
                    alert("Already booked,U cant edit");
            </script>						
 
 <?php
					}
					else {
						
                         $result ="SELECT * FROM landregister where Landid='$id'";
                         $result3=mysqli_query($con,$result);
                         while($row4 = mysqli_fetch_array($result3))
                         { 
                           $area=$row4['Area'];
                           $wre=$row4['Wresource'];
                           $scrop=$row4['Scrop'];

                           $ap=$row4['Apyear'];
                           $no=$row4['Noyear'];
						   
                       }
					   //echo $area;
					   

			}

   }

if(isset($_POST['submit']))
{

$a=$_POST["state"];
$b=$_POST["district"];
$c=$_POST["village"];
$hnam=$_POST["area"];
$wre=$_POST["select5"];
$scro=$_POST["select4"];
$amp=$_POST["amp"];
$nyear=$_POST["noy"];
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
$lnam=$row6['Distname'];
}
$sql3="SELECT * from village where Vid='$c'";
$result7=mysqli_query($con,$sql3);
while($row7 = mysqli_fetch_array($result7))
{ 
$v=$row7['Vname'];
}

$res="UPDATE `landregister` SET `State`='$name',`District`='$lnam',`Village`='$v',`Area`='$hnam',`Wresource`='$wre',`Scrop`='$scro',`Apyear`='$amp',`Noyear`='$nyear' WHERE `Landid`='$id';";
$re=mysqli_query($con,$res);
//echo $res;
?>
<script>
                    window.location="registerland.php";
                    alert("Updated Successfully ");
            </script>
			<?php
}			
	   

?>

<?php
	$get="SELECT cropname FROM `crop`";
	$result4=mysqli_query($con, $get);
	$options1 = "";
 while($row5 = mysqli_fetch_array($result4))
{
$options1 = $options1."<option>$row5[0]</option>";
}
?>

<html>
<head>
<title>Green Valley</title>




<script type="text/javascript">
    function validate(){
		var x,txt;
        x=document.editland;
        txt=x.area.value;
		if (isNaN(txt) || txt < 1 || txt > 99) {
        alert(" Area Must be between 1 and 99")
    } 
	else {
        return true
    }
		
		
        
}
function validat(){
        x=document.editland;
        tx=x.amp.value;
        if (isNaN(tx) || tx < 10000 || tx > 200000) {
        alert(" Amount Must be between 10000 and 200000")
    } else {
        return true
    }
}

function valida(){
        x=document.editland;
        t=x.noy.value;
        if (isNaN(t) || t < 3 || t > 30) {
        alert(" Number of years Must be between 3 and 30")
    } else {
        return true
    }
}


</script>

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
  
  <li><a href="viewmsg.php">Messages</a></li>
 <li><a href="feedback.php">Feedback</a></li>

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
<tr><td><button style="width:200px;height=500px"><a href="sellland.php">Sell ur Land</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewnoti.php">Notifications</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="ftips.php"> Post Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="viewfarming.php">View Farming Tips</a></button></td></tr>
<tr><td style="height:40px"><button style="width:200px;"><a href="bloklands.php">Blocked Lands</a></button></td></tr>
</table></td><td>
<table><caption>EDIT LAND DETAILS</caption><form name="editland" method="POST" action="#">
<tr><td>State</td><td><select name="state" onchange="getId(this.value);">
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
	  <?php
	$result1 ="SELECT * FROM landregister where Landid='$id'";
                         $result3=mysqli_query($con,$result1);
                         while($rows = mysqli_fetch_array($result3))
                         { 
                           $area1=$rows['Area'];
                           $wre=$rows['Wresource'];
                           $scrop=$rows['Scrop'];

                           $ap=$rows['Apyear'];
                           $no=$rows['Noyear'];
						   
                       } 
					   
					   

?>					   
	  
<tr><td>Area</td><td><input type="text" name="area" required min="1" max="50" onchange="validate()"  value='<?php echo $area1; ?> '></td></tr>
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
<tr><td>Amount per Year</td><td><input type="text" name="amp" required onchange="validat()"  value='<?php echo $ap ?> '></td></tr>
<tr><td>Number of years</td><td><input type="text" name="noy" required min="3" max="15" onchange="valida()"   value='<?php echo $no ?> '></td></tr>
<tr><td><input type="submit" value="UPDATE" name="submit"/></td><td><a href="login.php"><input type="submit" value="Cancel" name="submi"/></a></td></tr>
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


        