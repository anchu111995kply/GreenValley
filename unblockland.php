 <?PHP
    
	
    include 'connection.php';

if(isset($_GET['Landid'])){
                
                        $id1=$_REQUEST['Landid'];
						$sql2=mysqli_query($con,"UPDATE `landregister` SET status='0' WHERE Landid='$id1'");
                          
						  ?>
						  <script>
						  alert("Unblocked");
						  window.location="viewblockland.php"
						  </script>
<?php
}

		?>
						
						
						