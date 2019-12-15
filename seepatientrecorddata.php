<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}
$pid = mysqli_real_escape_string($conn,$_POST['pid']);
$disease = mysqli_real_escape_string($conn,$_POST['disease']); 
//$sdepartment = mysqli_real_escape_string($conn,$_POST['sdepartment']);
$previousdoctor = mysqli_real_escape_string($conn,$_POST['previousdoctor']);
$previousmedicine = mysqli_real_escape_string($conn,$_POST['previousmedicine']);

 	 	 	 




$sql = "select pid,disease,previousdoctor,previousmedicine
from patientpastrecord where pid='$pid';";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

header("Location: seepatientrecord.php?update=success");
?>