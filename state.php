<html>
<head>
<title>Fill Dropdown list</title>
<script language="javascript" type="text/javascript">
function showState(Country_Id)
{
 document.frm.submit();
}
</script>
</head>
<body>
<form name="frm" id="frm">
<?php
include 'connection.php';
$query = "SELECT * FROM state";
$result = mysqli_query($con,$query);
?>
<select name="select1"  onChange="showState(this.value);">
<option value="">--- Select State---</option>
<?php
while ($line = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $line['Sname'];?>" <?php if($line['Sname']==$_REQUEST["select1"]) { echo 
"Selected"; } ?> > <?php echo $line['Sname'];?> </option>
<?php
}
?>
<?php

$e=$_POST["select1"];
if ($e == "Kerala")
{
$sql1="select Distname from district where district.Sid==1"
$result1= mysqli_query($con,$sql1);
}
?>
</select>
<select name="select2"  >
<option value="">--- Select District---</option>
<?php
while ($line = mysqli_fetch_array($result1)) {
?>
<option value="<?php echo $line['Did'];?>"> <?php echo $line['Distname'];?> </option>
<?php
}
?>
</select>
</form>
</body>
</html>