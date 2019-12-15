<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';


$area = mysqli_real_escape_string($conn,$_POST['area']);
$dphone= mysqli_real_escape_string($conn,$_POST['dphone']);
$pid= mysqli_real_escape_string($conn,$_POST['pid']);
//*********************serial****************************
$s = "select * from appoinment where dphone='$dphone';";
$resul = mysqli_query($conn,$s);
$resultCheck = mysqli_num_rows($resul);
$tempserial=1;
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($resul)){
    $tempserial++;
  }
}
$serial=$tempserial;
//***********************date************************
$d = date("d");
$d=$d+2;
$date = $d .date("/m/Y")."";
//*******************time***************************
if($serial===1){
	$time = "3.00";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
//header("Location: appoinmentaddform.php?update=success");
}

  }
}
//***************************************************
}
if($serial===2){
	$time = "3.15";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}
elseif ($serial===3) {
	$time = "3.30";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}
elseif ($serial===4) {
	$time = "3.45";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}
elseif ($serial===5) {
	$time = "4.00";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}
elseif ($serial===6) {
	$time = "4.15";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}
elseif ($serial===7) {
	$time = "3.30";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}
elseif ($serial===8) {
	$time = "4.45";
	//*******************************************************
$temp = 0;
$sq="SELECT pid from patient;"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['pid']===$pid){
	$sql = "insert into appoinment (serial,date,time,area,dphone,pid) values ('$serial', '$date', '$time', '$area','$dphone','$pid');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

//header("Location: appoinmentaddform.php?update=success");
echo "<h1>"."Serial : ". $serial. "<br>" ."Appoinment On ". $date ."  " . $time ."</h1>;";
}

  }
}
//***************************************************
}

if($serial>8){
	header("Location: appoinmentfullwarning.php");
}

//**************************************************

?>