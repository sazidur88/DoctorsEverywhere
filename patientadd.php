<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';


$pid = mysqli_real_escape_string($conn,$_POST['pid']);
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$page = mysqli_real_escape_string($conn,$_POST['page']);
$psex = mysqli_real_escape_string($conn,$_POST['psex']);
$pphone = mysqli_real_escape_string($conn,$_POST['pphone']);
$paddress = mysqli_real_escape_string($conn,$_POST['paddress']);


if(empty($pid))
	echo "<h1>"."Field Empty"."</h1>";
else{
$sql = "insert into patient (pid,pname,page,psex,pphone,paddress) values ('$pid', '$pname', '$page', '$psex', '$pphone', '$paddress');";
mysqli_query($conn,$sql);     

header("Location: patientrecordform.php?update=success");
}
?>