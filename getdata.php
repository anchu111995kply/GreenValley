<?php
include_once "connection.php";

if (!empty($_POST["Sid"])) {
  $Sid = $_POST["Sid"];
echo $Sid;
  $query = "SELECT * FROM district WHERE Sid = '$Sid'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select District</option>
  <?php

 while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["Did"];?>"> <?php echo $row["Distname"]; ?> </option>

     <?php
}
}
?>
