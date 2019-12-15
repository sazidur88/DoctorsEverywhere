<?php
include_once 'conn.php';
if(isset($post['upload'])){
}

$pid = mysqli_real_escape_string($conn,$_POST['pid']);
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$page = mysqli_real_escape_string($conn,$_POST['page']);
$psex = mysqli_real_escape_string($conn,$_POST['psex']);
$pphone = mysqli_real_escape_string($conn,$_POST['pphone']);
$paddress = mysqli_real_escape_string($conn,$_POST['paddress']);
 	 	 	



$sql = "insert into patientpastrecord (pid,pname,page,psex,pphone,paddress) values ('$pid', '$pname', '$page', '$psex','$pphone','$paddress');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

header("Location: seepatientdata.php?update=success");
?>
				