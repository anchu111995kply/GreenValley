<?php
include 'connection.php';
$id=$_SESSION['Username'];
?>
<?php
if(isset($_GET['sellid'])){
	  
                
                        $id1=$_REQUEST['sellid'];
						echo $id1;
}
						$sql3=mysqli_query($con,"SELECT * FROM sellland WHERE sellid='$id1'");
						while($row=mysqli_fetch_array($sql3))
				  {
				  $v= $row['Username'];
				  	   
							   
				  }

?>
<?php
if(isset($_POST["submit"]))
{
$a=$_POST["comment"];


$sql="INSERT INTO `message`(  `msg`, `Username`, `receiver`) VALUES ('$a','$id','$v')";
$result=mysqli_query($con,$sql);
?>
<script>
                    window.location="available.php";
                    alert("Message Send Successfully ");
            </script>

<?php
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
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 
  
  
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table align="center"><form name="f2" method="post" id="f2" action="#">
<tr style="align:center"><td><textarea name="comment" placeholder="Write a message.." style="height:200px;Width:300px" ></textarea></td></tr>
<tr><td><input type="submit" name="submit" value="Send"></td>
<td><button><a href="userhome.php">Back</a></button></td>
</tr></form>

</tr></table>

	