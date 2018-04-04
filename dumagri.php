<?php

include 'connection.php';
$id=$_SESSION['Username']; 

if(isset($_GET['Landid'])){
	  
                
                        $id1=$_REQUEST['Landid'];
						//echo $id1;
}
						$sql3=mysqli_query($con,"SELECT * FROM booking,landregister WHERE remarks='Booked' and booking.Landid='$id1' and landregister.Landid='$id1'");
						while($row=mysqli_fetch_array($sql3))
				  {
				  $v= $row['remarks'];
				  $cust=$row['cust_user'];
                  $d=$row['email'];
                  $date=$row['date'];
				  $p=$row['Area'];
                  $q=$row['Apyear'];
				  $r=$row['Noyear'];
					$u=$row['Landid'];		   
							   
				  }
				  
				  
				  $result ="SELECT * FROM register where Username='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$Fname=$row3['Fname'];
$h=$row3['Village'];
							  

							   
}
			$sql5=mysqli_query($con,"SELECT * FROM register,booking WHERE register.Username=booking.email");
			
while($row5=mysqli_fetch_array($sql5))
{
								$k=$row5['Fname'];

                               $l=$row5['Lname'];
							  
							   $m=$row5['Village'];
							   $n=$row5['District'];
							   $o=$row5['State'];
							   
                               
}
	  
                        
						
						if(mysqli_num_rows($sql3)===0)
	                    {
		?>
						
						
						<script>
                    window.location="available.php";
                    alert(" Not yet Booked");
            </script>	
<?php		
	                   }	
						
		              else
		              {
						?>  <script>
                     alert("Booked");
					
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
</style>
</head>
<body>
<table><tr><td>
<tr><td><img src="images11.png">
<td  align="center" width="100%" style="background-image:url(5.png)"><font face="Comic Sans MS" size=40 color="white"><b> Green Valley</b></font> </td>
</tr>
</table>
<table align="right" width="100%" background color=red><tr><td><ul>
 <font size=5 color="red"><b>WELCOME </b> <i><?php echo $Fname ?> </i></font>
 <li><a href="logout.php">Logout</a></li>
  
  <li><a href="about.php">About</a></li>
 <li><a href="gallery.php">Gallery</a></li>

<li><a href="changepass.php">Change Password</a>
 </li>
 
  <li><a href="index.php">Home</a></li>

</ul>
</table>
<td>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</td>
<table align="center" border="5">
<th>

<h1>Lease Agreement</h1>
<tr><td><img src="p2.png"></td></tr>
<tr>
<td>
The agreement made at <?php echo $h ?>      on this   <?php echo $date ?>             between <?php echo $Fname ?> and <?php echo $k ?> <br/></td></tr>
<tr><td>The Area of the land is <?php echo $p ?> acres and the amount per year is <?php echo $q ?> for <?php echo $r ?> years<br/></td></tr>
</tr>
<tr><td>
        I agree all the details above</td>

<tr><td> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <button>  <a href=<?php 
		  
		   echo "payment.php?Landid=$u"?>>I  AGREE</a></button></td></tr>
</tr></table>
</body>
</html>
			  
				  