<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';

$sql = "select * from appoinment;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo "<table>";
echo "<tr>";
echo "<th>" . "	DATE" ."</th>"."<th>" . "TIME" ."</th>" . "<th>" . "AREA" ."</th>";
echo "<th>" . "SERIAL"."</th>"."<th>" . "DOCTOR PHONE";

echo "<tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['date'] . " </td>";
    echo "<td>" .$row['time'] . " </td>";
    echo "<td>" .$row['area'] . " </td>";
    echo "<td>" .$row['serial'] . " </td>";
    echo "<td>" .$row['dphone'] . " </td>";
    echo "</tr>";
  }
  echo "</table>";
}
?>