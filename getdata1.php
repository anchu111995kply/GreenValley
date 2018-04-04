<?php
include_once "connection.php";

if (!empty($_POST["Did"])) {
  $Did = $_POST["Did"];
echo $Sid;
  $query = "SELECT * FROM village WHERE Did = '$Did'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select Village</option>
  <?php

 while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["Vid"];?>"> <?php echo $row["Vname"]; ?> </option>

     <?php
}
}
?>
