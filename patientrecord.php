<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';


$pid = mysqli_real_escape_string($conn,$_POST['pid']);
$disease = mysqli_real_escape_string($conn,$_POST['disease']);
$previousdoctor = mysqli_real_escape_string($conn,$_POST['previousdoctor']);
$previousmedicine = mysqli_real_escape_string($conn,$_POST['previousmedicine']);
 	 	 	


if(empty($pid))
	{echo "<h1>"."Field Empty"."</h1>";}
else
{
$sql = "insert into patientpastrecord (pid,disease,previousdoctor,previousmedicine) values ('$pid', '$disease', '$previousdoctor', '$previousmedicine');";
mysqli_query($conn,$sql);      
echo "<h1>Data Successfully Updated</h1>";}
?>