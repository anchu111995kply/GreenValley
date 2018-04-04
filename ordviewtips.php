<?php
    include 'connection.php';
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
<td  align="center" width="100%" style="background-image:url(green.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>

 
  


 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<table><tr><td>
<table>
<td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td> </td>
 <td><img src="tip1.png"></td>
 <td>
<form action="#" method="POST" >
<table  align="center"border="1" bgcolor="#bfff00" >
        <tr> 
          <td width="100%"><strong><font color="#000000">Farming Tips</font></strong></td>
         
        </tr>
<?php
$sql3="SELECT * FROM ftips where status='1'";
$result3=mysqli_query($con,$sql3);

 while($row=mysqli_fetch_array($result3))
    {
    ?>
        <tr> 
          <td><?php echo $row['tip']; ?></td>
		  
          
      </tr>
	  <?php
	}
?>


		 
        
		 
</tr></table>
</body>
</html>