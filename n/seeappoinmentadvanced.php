<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';

$dphone = mysqli_real_escape_string($conn,$_POST['dphone']);




echo "<h1>Searching For Phone : $dphone<h1>";






$sql = "select * from appoinment where dphone='$dphone';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

echo "<table>";
echo "<tr>";
echo "<th>" . "DATE" ."</th>"."<th>" . "TIME" ."</th>" ;
echo "<th>" . "SERIAL"."</th>"."<th>"."DOCTOR PHONE"."</th>" ;
echo "<th>" . "PATIENT ID" ."</th>";
echo "<tr>";

if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['date'] . " </td>";
    echo "<td>" .$row['time'] . " </td>";
    echo "<td>" .$row['serial'] . " </td>";
    echo "<td>" .$row['dphone'] . " </td>";
      echo "<td>" .$row['pid'] . " </td>";
    echo "</tr>";
    
  }
  echo "</table>";
}


?>


