<?php
include 'connection.php';
?>
<?php
if(isset($_POST["submit"]))
{
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["email"];

$e=$_POST["state"];
$k=$_POST["subject"];

$sql="INSERT INTO `contact`(  `fname`, `lname`, `email`, `state`, `subject`) VALUES ('$a','$b','$c','$e','$k')";
$result=mysqli_query($con,$sql);
}
?>
<html>
<head><title>GreenValley</title></head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:green;
	width:100%;
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
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize:horizontal;
	align:center;
}
input[type=email] {
    width: 100%;
	padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize:horizontal;
	align:center;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	align:center;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	align:center;
}
.footer{
	position:absolute;
	width:100%;
	color:white;
	top:1000px;
	background-color:green;
	height:120px;
}
</style>

<body>
<table style="width:100%">
<tr><td><img src="images11.png"></td>
<td  align="center" width="100%" style="background-image:url(green.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 
  
  
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<h3><center><b>CONTACT US</b></center></h3>

<div class="container">
  <form action="#" method="post" name="cnt" id="cn">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">
<label for="lname">Email</label>

    <input type="email" id="email" name="email" placeholder="Your Email..">
    <label for="state">State</label>
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
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<footer><div class="footer">
            <table  align="center" cellpadding="10px">
                <tr>
                    <td width="33%">
                        <img src="icon6.png" alt="icon6" width="40px" height="40px"/>
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
| <a href="#main">Top</a></i>
        </div></footer> 
		</body>
		</html>
