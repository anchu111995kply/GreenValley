

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
<?php
include 'connection.php';
$id=$_SESSION['Username'];
if(isset($_POST['submit']))
{
$uname=$_POST["uname"];
$oldp=$_POST["old"];
$newp=$_POST["new"];
$conp=$_POST["con"];
?>
<?php
$sql2="select * from login where Username='$id'";
$result1 = mysqli_query($con,$sql2);
while($row=mysqli_fetch_array($result1))
				  {
				  $v= $row['Password'];
				  
				  }
if($v!=$oldp)
{
	?>
	<script>
	//window.location("changepass.php");
	alert("Current password is wrong");
	
	</script>
		
		<?php
}
else
{
	
$sql="UPDATE `login` SET `Password`='$conp' WHERE `Username`='$uname' and `Password`='$oldp'";
//echo $sql;
$result = mysqli_query($con,$sql);

?>
<script>
                    window.location="index.php";
                    alert("Login Now");
 </script> 
<?php
}
}



?>
<table>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(download4.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 
 
  <li><a href="index.php">Login</a></li>

</ul>
</table>

</body>

<script>
function validation()
{
if (document.changepassword.old.value=="")
	 {
		 document.changepassword.old.focus();
		 alert("enter old password");
		 return false;
	 }
if (document.changepassword.new.value=="")
	 {
		 document.changepassword.new.focus();
		 alert("provide a new password");
		 return false;
	 }
if (document.changepassword.con.value=="")
	 {
		 	 alert("provide confirm password");
		 document.changepassword.new.focus();
		 return false;
	 }
	// if (document.changepassword.old.value=document.changepassword.new.value) {
		// alert("same passwords");
		 //document.changepassword.new.focus();
		 //return false;

	 //}

if (document.changepassword.new.value!=document.changepassword.con.value)
	 {
		 alert("Mismatch password");
		 document.changepassword.con.focus();

		 return false;
	 }
}

</script>
<body >
<div>
<form id="changepassword" name="changepassword" method="post" action="#"onSubmit="return validation()">
<br/>
<br/>
<table align="center">
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
  <tr>
    <td >Username:</td>
<td>
    <input type="text" name="uname" id="uname"readonly value='<?php echo $id ?> ' /></td>
  </tr>
  <tr><td >CurrentPassword:</td>
<td>
    <input type="password" name="old" id="old" required/></td>
  </tr>
  <tr>
    <td>New password:</td>
    <td><input type="password" name="new" id="new" required/></td>
  </tr>
  <tr>
    <td>Confirm password:</td>
    <td>
    <input type="password" name="con" id="con" required /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit"  value="Change" onclick="index.php" />

   </td>
  </tr>
</table>

</form>
</div>
<br>
<br>

</body>
</html>
