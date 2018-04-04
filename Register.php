<?php
include 'connection.php';
if(isset($_POST["submit"]))
{

$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["ads"];
$d=$_POST["place"];
$e=$_POST["state"];
$k=$_POST["district"];
$l=$_POST["village"];
$f=$_POST["pin"];
$g=$_POST["email"];
$h=$_POST["password"];
$j=$_POST["phno"];
$i=$_POST["p3"];

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


$sql="INSERT INTO `register`(  `Fname`, `Lname`, `Housename`, `Place`, `State`, `District`,`Village`,`Pin`, `Phno`, `Photo`,`Username`) VALUES ('$a','$b','$c','$d','$name','$dist','$vil','$f','$j','$i','$g')";
$result=mysqli_query($con,$sql);
$requst1=mysqli_query($con,"select * from register");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst1))
				  {
				  $v= $row['Regid'];
				  
				  }
//$res=mysqli_query($con,$requst1);
$sql1="INSERT INTO `login`(`Username`,`status`, `Password`,`Regid`, `roleid`)  VALUES ('$g','0','$h','$v','1')";
$result1=mysqli_query($con,$sql1);
echo "datas are entered..!!";
 if (mysqli_query($con,$sql) > 0){
            if (mysqli_query($con,$sql1) > 0){
                echo "<script> alert('Success'); </script>";
            }
            }
            else{
                    echo "<script> alert ('Username Already Exists !'); </script>";
			}
   ?>
<script>
                    window.location="index.php";
                    alert("Login Now");
 </script> 
 <?php         
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

* {box-sizing:border-box}


/* Slideshow container */
.slideshow-container {
  max-width: 1000;
max-height:500;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: white;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<script>
 function valid()
{
	
 if(document.reg.fname.value=="")
  {
     alert("enter  first name");
	 document.reg.fname.focus();
	 return false;
  }
   
  if(!document.reg.fname.value.match(/^[a-z A-Z]+$/))
  {
     alert("First name should contain alphabets only");
	 document.reg.fname.focus();
	 return false;
   }

 
  
   if(document.reg.lname.value=="")
  {
     alert("enter  Last name");
	 document.reg.fname.focus();
	 return false;
  }
	 if(!document.reg.lname.value.match(/^[a-z A-Z]+$/))
   {
      alert("Last name should contain alphabets only");
 	 document.reg.lname.focus();
 	 return false;
    }
  
 
  
 if(document.reg.phno.value=="")
   {
      alert("enter your mobile number");
	 document.reg.phno.focus();
	 return false;
	}
	if(isNaN(document.reg.phno.value))
    {
     alert("using only numbers");
	 document.reg.phno.focus();
	 return false;
   }
   var mobile=document.reg.phno.value;
   if(mobile.length!=10)
   {
     alert("mobile number contain 10 digit");
		 document.reg.phno.focus();
	 return false;
	}
  
  
  
	  
	if(document.reg.email.value=="")
   {
      alert("enter the mail address");
	 document.reg.email.focus();
	 return false;
	}

	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.reg.email.value)))
	{
		alert("you have entered an invalid email address:");
		return false;
	}
}
function pin()
{
	if(isNaN(document.reg.pin.value))
		{
		 alert("using only numbers");
	 document.reg.pin.focus();
	 return false;
	 }
  
  
  
	  
	 var pinno=document.reg.pin.value;
   if(pin.length!=6)
   {
     alert("Pin number contain 6 digits");
		 document.reg.phno.focus();
	 return false;
	}
}
	if (document.reg.password.value=="")
	 {
		 alert("provide Ur password");
		 document.reg.password.focus();
		 return false;
	 }
  
	 if(document.reg.housename.value=="")
  {
     alert("enter  House name");
	 document.reg.fname.focus();
	 return false;
  }
	 if(!document.reg.housename.value.match(/^[a-z A-Z]+$/))
   {
      alert(" House Name contain alphabets only");
 	 document.reg.housename.focus();
 	 return false;
    }
	if(document.reg.place.value=="")
  {
     alert("enter  Place name");
	 document.reg.place.focus();
	 return false;
  }
		if(!document.reg.place.value.match(/^[a-z A-Z]+$/))
	  {
	     alert(" Place name should contain alphabets");
		 document.reg.place.focus();
		 return false;
	   }
}


  // Work around a Safari bug
  // that sometimes produces a blank page
  //setTimeout("backButtonOverrideBody()", 1);




</script>
</style>
</head>
<body>
<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="red"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>

<li><a href="index.php">Login</a>
 </li>
 
  <li><a href="index.php">Home</a></li>
</tr></td>
</ul>
</table>
<br>
<table><tr><td style="border:5px solid black">
<table>
<tr>
<td style="height:40px">
<button style="width:200px;height=500px">Available Lands</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">About Crops</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Notifications</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Farming Tips</button></td></tr>
<tr><td style="height:40px"><button style="width:200px;">Contact Us</button></td></tr>
</table></td>
<td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td style="border:5px solid black">
<table align="center" background="animated-cook-and-chef-image-0008.gif"><form id="form2" name="reg" method="POST" action="#">
<center><table id="loginTable" height=200px width=200px align="center"cell padding="5"><tr><td style="background-image:url("animated-cook-and-chef-image-0008.gif")pink;height:100px;"><div style="background-image:url("animated-cook-and-chef-image-0008.gif");height:300px;width:350px;align:center;font-family:"Comic Sans MS";"><form><table align=center height=250px width=260px><caption><b><i><font size=5px>Welcome to Green Valley.........</font></i></b></caption></td><tr>
<td>First Name</td><td><input type="text" name="fname" id="fname" onchange="fn()"  required></td>
<td>Last Name</td><td><input type="text" name="lname" id="lname"   onchange="ln()"  required></td></tr>
<tr><td>House name</td><td><input type="text" name="ads" id="ads" onchange="hn()"  required></td>
<td>Place</td><td><input type="text" name="place" id="place"  onchange="pla()"     required></td></tr>
<tr><td>State</td>
<td>
<select name="state" onchange="getId(this.value);">
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
   </select>

</td></tr>
<tr><td>District</td><td>
<select name="district" id="district" onchange="getId1(this.value);">
        <option value=" ">District</option>

      </select>
	  
</td></tr>
<tr><td>Village</td><td>
<select name="village" id="village">
        <option value=" ">Village</option>

      </select>
  

</td></tr>
<tr><td>Pin</td><td><input type="number" name="pin" id="pin" onchange="pin()" required></td></tr>
<tr><td>Emailid</td><td><input type="email" name="email" onchange="email()" required></td></tr>
<tr><td>Password</td><td><input type="password" name="password" required></td></tr>
<tr><td>Phno</td><td><input type="number" name="phno" id="phn" onchange="ph()" required></td></tr>
<tr><td>Photo</td><td><input type="file" name="p3" accept="image/x-png,image/gif,image/jpeg"></td></tr>
<tr><td><input type="submit" value="Save" name="submit"/></td><td><a href="login.php"><input type="submit" value="Cancel" name="submit"/></a></td></tr>
</table></center></form></table></td>
<td></td> <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td style="background-color:olive"><table><tr><td>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="2.png" style="width:440px;height:200px">
  </div>
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="4.png" style="width:440px;height:200px">
 </div>
<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="3.png" style="width:440px;height:200px">
 </div>

</div>




<div style="text-align:bottom-right">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</td></tr></table>
</td></tr></table>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/validation.js"></script>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
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


