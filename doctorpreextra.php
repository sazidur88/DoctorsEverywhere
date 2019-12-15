<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}


$regid = mysqli_real_escape_string($conn,$_POST['regid']);


$sq="SELECT regid from doctor;"; 
$sql = "insert into doctor (regid) values ( '$regid');";
$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['regid']===$regid){
  mysqli_query($conn,$sql);  
  header("Location: doctorextra.php?update=success");
}

  }

 
    echo "<h1>No Match Found</h1>";
}


?>


