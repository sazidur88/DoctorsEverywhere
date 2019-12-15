<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';


$regid = mysqli_real_escape_string($conn,$_POST['regid']);
$dname = mysqli_real_escape_string($conn,$_POST['dname']);
$dsex = mysqli_real_escape_string($conn,$_POST['dsex']);
$dspecialist = mysqli_real_escape_string($conn,$_POST['dspecialist']);
$dphone = mysqli_real_escape_string($conn,$_POST['dphone']);
$daddress = mysqli_real_escape_string($conn,$_POST['daddress']);
$temp=0;
$sq="SELECT regid from registration;"; 
$sql = "insert into doctor (regid,dname,dsex,dspecialist,dphone,daddress) values ('$regid', '$dname', '$dsex', '$dspecialist', '$dphone', '$daddress');";
$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['regid']===$regid){
	mysqli_query($conn,$sql);  
	echo "<h1>Data Successfully Updated </h1>";
	$temp++;
}

  }


 	if($temp===0){
  	echo "<h1>No Match Found</h1>";}
}


?>


