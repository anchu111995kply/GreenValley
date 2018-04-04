<html>
<head><title>GreenValley</title>
</head>
<body>
<table width="100%" border="1">
        <tr> 
          <td><strong><font color="#000000">Fname</font></strong></td>
          <td><strong><font color="#000000">Last Name</font></strong></td>
          <td><strong><font color="#000000">State</font></strong></td>
          <td><strong><font color="#000000">Booking</font></strong></td>
    
        </tr>
  <?PHP
    include("connection.php");
    
    $sql = mysqli_query($con,"select * from register,landregister where landregister.Username=register.Username");;
    //echo $sql;exit;
    
    while($row=mysqli_fetch_array($sql))
    {
    ?>
        <tr> 
          <td><?php echo $row['Fname']; ?></td>
          <td><?php echo $row['Lname']; ?></td>
          <td><?php echo $row['State']; ?></td>
          
          
          
         
     <td><strong><a href="book.php">Book Now</strong></a> </td>
        </tr>
  <?php
  }
  ?>
  </body>
  </html>