<?php
include 'connection.php';
if(isset($_POST["submit"]))
{

$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["housename"];
$d=$_POST["place"];
$e=$_POST["state"];
$k=$_POST["district"];
$l=$_POST["village"];
$f=$_POST["pin"];
$g=$_POST["email"];
$h=$_POST["password"];
$j=$_POST["phno"];
$i=$_POST["p3"];
$sql="INSERT INTO `register`(  `Fname`, `Lname`, `Housename`, `Place`, `State`, `District`,`Village`,`Pin`, `Phno`, `Photo`,`Username`) VALUES ('$a','$b','$c','$d','$e','$k','$l','$f','$j','$i','$g')";
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
 <script>
        function loginPwd(){
            var fpwd1=/^[a-z0-9]{4,25}$/;
                if(document.frmLogin.lpwd.value.search(fpwd1)==-1)
                 {
                      alert("OoppZz.. Wrong Password");
                      document.frmLogin.lpwd.focus();
                      
                      return false;
                }
        }
        
        function gName(){
            var gl_reg_name= document.reg.fname.value;
                if(gl_reg_name===null){
                    
                    alert("Enter First Name");
                    document.reg.fname.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.gl_reg_form.gl_reg_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.gl_reg_form.gl_reg_name.focus();
                      
                      return false;
                    }
                if((gl_reg_name.length>25)){
                   
                    alert("First Name Must Not Exceed 24 Characters");
                    document.reg.fname.focus();
                    return false;
                }
        }
        function gEmail(){
            var gl_reg_email=document.email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    
                    document.reg.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
        }
        function gPhone(){
            var gl_reg_num=document.phno.value;
                if(isNaN(gl_reg_num)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.reg.phno.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.reg.phno.focus();
                    alert("Phone Number must be 10 Digits");
                    
                    return false;
                }
        }
        function gAdhar(){
            var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
        }
        function gAdmNo(){
            var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
        }
        function gPwd(){
            var gl_reg_pwd= document.reg.password.value;
                var gl_reg_cpwd=document.reg.password.value;
                if(gl_reg_pwd.length < 4 ){
                    document.reg.gl_reg_pwd.style.border = "1px solid red";
                    document.reg.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.reg.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
        }
        
        
        function  addUser(){
                var gl_reg_name= document.reg.fname.value;
                if(gl_reg_name===null){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Enter First Name");
                    document.reg.fname.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.reg.gl_reg_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.reg.fname.focus();
                      document.reg.fname.style.border = "1px solid red";
                      return false;
                    }
                if((gl_reg_name.length>25)){
                    document.reg.fname.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.reg.fname.focus();
                    return false;
                }
                var gl_reg_num=document.reg.phno.value;
                if(isNaN(gl_reg_num)){
                    document.reg.phno.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.reg.phno.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.reg.phno.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.reg.phno.focus();
                    return false;
                }
                
                var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                
                var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                
                
                var gl_reg_email=document.reg.email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    
                    document.reg.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
                
                
                var gl_reg_pwd= document.gl_reg_form.gl_reg_pwd.value;
                var gl_reg_cpwd=document.gl_reg_form.gl_reg_cpwd.value;
  
                
                if(gl_reg_pwd.length < 4 ){
                    document.gl_reg_form.gl_reg_pwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.gl_reg_form.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
                var fpwd=/^[a-z0-9]{4,25}$/;
                if(document.gl_reg_form.gl_reg_pwd.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.gl_reg_form.gl_reg_pwd.focus();
                      
                      return false;
                }
            }
        </script>
function backButtonOverride()
{
  // Work around a Safari bug
  // that sometimes produces a blank page
  setTimeout("backButtonOverrideBody()", 1);

}

function backButtonOverrideBody()
{
  // Works if we backed up to get here
  try {
    history.forward();
  } catch (e) {
    // OK to ignore
  }
  // Every quarter-second, try again. The only
  // guaranteed method for Opera, Firefox,
  // and Safari, which don't always call
  // onLoad but *do* resume any timers when
  // returning to a page
  setTimeout("backButtonOverrideBody()", 500);
}
</script>
</style>
</head>
<body>
<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(download4.png)"><font face="Comic Sans MS" size=40 color="red"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 <li><a href="logout.php">Logout</a></li>
  
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
<table align="center" background="animated-cook-and-chef-image-0008.gif"><form id="form2" name="reg" method="POST" action="#" onSubmit="return valid()">
<center><table id="loginTable" height=200px width=200px align="center"cell padding="5"><tr><td style="background-image:url("animated-cook-and-chef-image-0008.gif")pink;height:100px;"><div style="background-image:url("animated-cook-and-chef-image-0008.gif");height:300px;width:350px;align:center;font-family:"Comic Sans MS";"><form><table align=center height=250px width=260px><caption><b><i><font size=5px>Welcome to Green Valley.........</font></i></b></caption><tr>
<td>First Name</td><td><input type="text" name="fname" required></td><td>Last Name</td><td><input type="text" name="lname" required></td></tr>
<tr><td>House name</td><td><input type="text" name="housename" required></td><td>Place</td><td><input type="text" name="place"></td></tr>
<tr><td>State</td>
<td>
<select name="state" onchange="getId(this.value);">
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
<tr><td>Pin</td><td><input type="number" name="pin" required></td></tr>
<tr><td>Emailid</td><td><input type="email" name="email" required></td></tr>
<tr><td>Password</td><td><input type="password" name="password" required></td></tr>
<tr><td>Phno</td><td><input type="number" name="phno" required></td></tr>
<tr><td>Photo</td><td><input type="file" name="p3" accept="image/*"></td></tr>
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


