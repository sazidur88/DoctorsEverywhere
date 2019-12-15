<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}
$date = mysqli_real_escape_string($conn,$_POST['date']);
$time = mysqli_real_escape_string($conn,$_POST['time']); 
//$sdepartment = mysqli_real_escape_string($conn,$_POST['sdepartment']);
$area = mysqli_real_escape_string($conn,$_POST['area']);
$serial = mysqli_real_escape_string($conn,$_POST['serial']);
$dphone = mysqli_real_escape_string($conn,$_POST['dphone']);




$sql = "select date,time,area,serial,dphone
from appoinment where serial='$serial';";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

header("Location: seeappoinment.php?update=success");
?>