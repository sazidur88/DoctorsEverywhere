<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}
$regid = mysqli_real_escape_string($conn,$_POST['regid']);

$sql = "insert into doctor (regid,dname,dsex,dspecialist,dphone,daddress) values ('$regid', '$dname', '$dsex', '$dspecialist', '$dphone', '$daddress');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

header("Location: doctoraddform.php?update=success");
?>